<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_login();
        __check_valid_user();

        $this->per_page =  10;
        $this->load->library('pagination');
    }

    public function index()
    {
        $data = [];
        $data['page_title'] = 'Dashboard';
        __mainContent('backend/customer/dashboard', $data);
    }
    /* ======================================
    Customer dashboard index area end
    ======================================== */



    public function my_tickets()
    {
        $data = [];
        $data['page_title'] = 'My Tickets';
        $data['page'] = 'ticket';
        $id = __user_info()->id;

        $config = [];
        $per_page = $this->per_page;

        $page = $this->input->get('page');
        if (empty($page)) {
            $page = 0;
        }

        if ($page != 0) {
            $page = $page - 1;
        }

        $offset = ceil($page * $per_page);
        $total = $this->admin_m->get_ticket_by_id($id, 0, 0, 1);
        $config['base_url'] = base_url('customer/dashboard/my_tickets');
        $config['total_rows'] = $total;
        $config['per_page'] = $per_page;
        $this->pagination->initialize($config);

        $data['tickets'] = $this->admin_m->get_ticket_by_id($id, $per_page, $offset, 0);

        __mainContent('backend/customer/my_tickets', $data);
    }
    /* ======================================
    My Tickets Area End
    ======================================== */



    public function create_ticket()
    {
        $data = [];
        $data['page_title'] = 'Create Ticket';
        $data['page'] = 'ticket';
        $data['category_list'] = $this->default_m->select('category_list');
        __mainContent('backend/customer/create_ticket', $data);
    }
    /* ======================================
    Create ticket Area End
    ======================================== */



    public function add_ticket()
	{
		$this->form_validation->set_rules('subject', 'Subject', 'trim|required');
		$this->form_validation->set_rules('cat_id', 'Category', 'trim|required');
		$this->form_validation->set_rules('description', 'Description', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			__request(validation_errors(), 0 ,'');
		}else
		{
			$post = $this->input->post(NULL, TRUE);

			do {
			    $ticket_id = uniqid();
			} while ($this->admin_m->check_uid_exists($ticket_id));

			$data = [
				'ticket_id'   => $ticket_id,
				'user_id' 	  => __user_info()->id,
				'subject' 	  => $post['subject'],
				'cat_id' 	  => $post['cat_id'],
				'priority' 	  => isset($post['priority']) ? $post['priority'] : '',
				'ticket_type' => $post['ticket_type'],
				'description' => $post['description'],
				'created_at'  => d_time()
			];

            $id = $post['id'];

            if ($id == 0) {
			    $last_id = $this->default_m->insert($data,'tickets_list');
            }else{
                $last_id = $this->default_m->update($data, $id,'tickets_list');
            }

			if ($last_id) {
				upload_img($last_id, 'tickets_list');
				__request('Ticket submit successful', 1, base_url('customer/dashboard/my_tickets?isAjax=1'));
			}else{
				__request('Somethings want wrong!!', 0, '');
			}
		}
	}
	/* ======================================
	Add ticket area end
	======================================== */



    public function edit_ticket($id)
    {
        $data = [];
        $data['page_title'] = 'Edit Ticket';
        $data['page'] = 'ticket';
        $data['category_list'] = $this->default_m->select('category_list');
        $data['ticket'] = $this->default_m->single_select_by_id($id, 'tickets_list');
        __mainContent('backend/customer/create_ticket', $data);
    }
    /* ======================================
    Ticket Edit Area End
    ======================================== */



    public function chat()
    {
        $data = [];
        $data['page_title'] = 'Chat';
        $data['page'] = 'chat';
        __mainContent('backend/customer/customer_chat', $data);
    }
    /* ======================================
    Chat Area End
    ======================================== */



    public function profile()
    {
        $data = [];
        $data['page_title'] = 'Profile';
        $data['page'] = 'profile';
        __mainContent('backend/customer/profile', $data);
    }
    /* ======================================
    Profile Index Area ENd
    ======================================== */



    public function update_profile()
    {
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');

        if ($this->form_validation->run() == false) {
            __request(validation_errors(), 0, '');
        } else {
            $id = $this->input->post('id', TRUE);
            $email = $this->input->post('email', TRUE);
            $check_email = $this->admin_m->email_exists_check_by_id($id, $email);

            if (!empty($check_email)) {
                $exists_msg = 'This email already exits!!';
            } else {
                $email = $this->input->post('email', TRUE);
            }


            $username = $this->input->post('username', TRUE);
            if(!empty($username)):
                $check_username = $this->admin_m->username_exists_check_by_id($id, $username);

                if (!empty($check_username)) {
                    $exists_msg = 'This username already exits!!';
                } else {
                    $username = $this->input->post('username', TRUE);
                }
            endif;

            if (!empty($exists_msg)) {
                __request($exists_msg, 0, '');
            } else {
                $post = $this->input->post(null, true);
                $data = [
                    'name'       => $post['name'],
                    'email'      => $email,
                    'username'   => $username,
                    'phone'   => $post['phone'],
                ];

                $last_id = $this->default_m->update($data, $id, 'users');

                if ($last_id) {
                    upload_img($id, 'users');
                    __request('Profile Update successful', 1, base_url('customer/dashboard/profile?isAjax=1'));
                } else {
                    __request('Profile Update error!!', 0, '');
                }
            }
        }
    }
}
