<?php
defined('BASEPATH') or exit('No direct script access allowed');

use Pusher\Pusher;

class Chat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_login();
    }

    public function index()
    {
        __check_valid_admin();
        $data = [];
        $data['page_title'] = 'Chat';
        $data['page'] = 'chat';

        $data['ticket_list'] = $this->admin_m->get_tickets();

        $data['role'] = 'admin';
        $data['send_id'] = auth('id');

        if (isset($_GET['m']) && !empty($_GET['m'])):

            $data['ticket_id'] = $_GET['m'];
            $data['ticket_info'] = $this->admin_m->ticket_info_by_id($_GET['m']);
            $data['receive_id'] = $data['ticket_info']['user_id'];
            $data['chat_list'] = $this->admin_m->chat_select_by_ticket_id($_GET['m']);

            $check_new_ticket = $this->admin_m->get_new_ticket_by_id($_GET['m']);

            if ($check_new_ticket):
                $this->default_m->update(['status' => 'open'], $check_new_ticket->id, 'tickets_list');
            endif;

            $this->message_seen($_GET['m']);
        endif;

        __mainContent('backend/chat/chat', $data);
    }



    public function customer_chat()
    {
        __check_valid_user();
        $data = [];
        $data['page_title'] = 'Chat';
        $data['page'] = 'chat';

        $data['role'] = 'customer';
        $data['ticket_list'] = $this->admin_m->get_my_tickets(auth('id'));
        $data['send_id'] = auth('id');

        if (isset($_GET['m']) && !empty($_GET['m'])):
            $data['ticket_id'] = $_GET['m'];
            $data['ticket_info'] = $this->admin_m->ticket_info_by_id($_GET['m']);
            $data['receive_id'] = __admin_info()->id;;
            $data['chat_list'] = $this->admin_m->chat_select_by_ticket_id($_GET['m']);

            $this->message_seen($_GET['m']);
        endif;

        __mainContent('backend/chat/chat', $data);
    }


    public function send()
    {
        $this->form_validation->set_rules('message', 'message', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            __request(validation_errors(), 0);
        } else {
            if (auth('user_role') == 'admin') {
                $role = 'admin';
            } else {
                $role = 'user';
            }

            $data = array(
                'ticket_id' => $this->input->post('ticket_id', TRUE),
                'send_id' => $this->input->post('send_id', TRUE),
                'receive_id' => $this->input->post('receive_id', TRUE),
                'role' => $role ?? 'admin',
                'message' => $this->input->post('message', TRUE),
                'created_at' => d_time(),
            );

            $send = $this->default_m->insert($data, 'chat_list');

            if ($send) {

                //Configure Pusher
                $options = array(
                    'cluster' => 'mt1',
                    'useTLS' => true
                );
                $pusher = new Pusher(
                    '29f0a471ecf4e07e0235',
                    '680bd2a6c966ae25b73d',
                    '2062690',
                    $options
                );

                $pusher->trigger('supportchat', 'new-message', $data);

                echo json_encode(['st' => 'success', 'data' => $data]);
            } else {
                echo json_encode(['st' => 'error']);
            }
        }
    }
    /* ======================================
        Message send Area End
    ======================================== */



    public function get_chat_message($ticket_id)
    {
        $data['chat_list'] = $this->admin_m->chat_select_by_ticket_id($ticket_id);
        $load = $this->load->view('backend/chat/chat_thumb.php', $data, TRUE);
        echo json_encode(['data' => $load]);
        exit();
    }
    /* ======================================
    Get Chat List by ticket id 
    ======================================== */



    public function change_ticket_status()
    {
        $id = $this->input->post('id', TRUE);
        $status = $this->input->post('status', TRUE);

        $update_id = $this->default_m->update(['status' => $status], $id, 'tickets_list');

        if ($update_id) {
            echo json_encode(['st' => 1, 'msg' => 'Ticket status change successful']);
        } else {
            echo json_encode(['st' => 0, 'msg' => 'Something wait wrong!!']);
        }
    }
    /* ======================================
    Change tickets area end
    ======================================== */



    public function load_chat_sidebar($ticket_id)
    {
        $data['ticket_id'] = $ticket_id;

        $this->message_seen($ticket_id);

        if (auth('user_role') == 'admin') {
            $data['ticket_list'] = $this->admin_m->get_tickets();
            $load = $this->load->view('backend/chat/admin_chatSidebar', $data, TRUE);
        } else {
            $data['ticket_list'] = $this->admin_m->get_my_tickets(auth('id'));
            $load = $this->load->view('backend/chat/customer_chatSidebar', $data, TRUE);
        }

        echo json_encode(['st' => 1, 'data' => $load]);
    }




    function message_seen($ticket_id)
    {
        $ids = $this->admin_m->check_unseen_msg_by_ticket_id($ticket_id);

        if (!empty($ids)) {
            $this->default_m->update_in(['status' => 'seen'], $ids, 'chat_list');
        }
    }

}
