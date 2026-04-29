<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_m extends CI_Model
{
    public function __construct()
    {
        $this->db->query("SET sql_mode = ''");
    }


    public function email_exists_check_by_id($id, $email)
    {
        $this->db->select('id');
        $this->db->from('users');
        $this->db->where('email', $email);
        $this->db->where('id !=', $id);
        $query = $this->db->get();
        return $query->result() ?? [];
    }
    /* ======================================
    Email Exists check by Id 
    ======================================== */


    public function email_exists_check($email)
    {
        $this->db->select('id');
        $this->db->from('users');
        $this->db->where('email', $email);
        $query = $this->db->get();
        return $query->result() ?? [];
    }
    /* ======================================
    Email Exists check 
    ======================================== */



    public function username_exists_check_by_id($id, $username)
    {
        $this->db->from('users');
        $this->db->where('username', $username);
        $this->db->where('id !=', $id);
        $query = $this->db->get();
        return $query->result() ?? [];
    }
    /* ======================================
    Username exists check by id
    ======================================== */



    public function get_all_customers($per_page = 0, $offset = 0, $total = 0)
    {
        $this->db->select();
        $this->db->from('users');
        $this->db->where('user_role', 'customer');

        if ($total == 1) {
            $query = $this->db->get();
            $query = $query->num_rows();
        }

        if ($total == 0) {
            $query = $this->db->get('', $per_page, $offset);
            $query = $query->result();
        }
        return $query;
    }
    /* ======================================
        Customer List Area end
    ======================================== */



    public function get_knowledge_with_cat()
    {
        $this->db->select('k.*, k.id as knowledge_id, c.title as category_name');
        $this->db->from('knowledge k');
        $this->db->join('category_list c', 'c.id=k.cat_id');
        $query = $this->db->get();
        return $query->result();
    }
    /* ======================================
    Get knowledge with cat
    ======================================== */



    public function get_category_under_knowledge($total = 0)
    {
        $this->db->select();
        $this->db->from('category_list');
        $query = $this->db->get();
        $category = $query->result_array();

        foreach ($category as $key => $cat) {
            $id = $cat['id'];
            $this->db->select();
            $this->db->from('knowledge');
            $this->db->where('cat_id', $id);
            $this->db->where('status', 1);
            $query = $this->db->get();
            if ($total == 1) {
                $category[$key]['total'] = $query->num_rows();
            } else {
                $category[$key]['knowledge'] = $query->result();
            }
        }

        return $category;
    }
    /* ======================================
    Get Category under knowledge Area end
    ======================================== */



    public function get_ticket_by_id($id, $per_page = 0, $offset = 0, $total = 0)
    {
        $this->db->select('t.*, t.id as ticketId, c.title as category_name');
        $this->db->from('tickets_list t');
        $this->db->join('category_list c', 'c.id=t.cat_id');
        $this->db->where('t.user_id', $id);

        if ($total == 1) {
            $query = $this->db->get();
            $query = $query->num_rows();
        }

        if ($total == 0) {
            $query = $this->db->get('', $per_page, $offset);
            $query = $query->result();
        }
        return $query;
    }
    /* ======================================
    Get ticket by id area end
    ======================================== */


    public function check_uid_exists($uid)
    {
        $this->db->where('ticket_id', $uid);
        $query = $this->db->get('tickets_list');
        return $query->num_rows() > 0;
    }
    /* ======================================
    Php uid exists check area end
    ======================================== */


    public function get_all_tickets($per_page = 0, $offset = 0, $total = 0)
    {
        $this->db->select('t.*, t.id as ticketId, u.name as user_name, u.email as user_email, u.user_role as user_role, u.images as user_image');
        $this->db->from('tickets_list t');
        $this->db->join('users u', 'u.id=t.user_id');
        $this->db->order_by("FIELD(t.priority, 'very urgent', 'high', 'medium', 'low')");

        if (isset($_GET)) {
            if (!empty($_GET['ticket_id'])) {
                $this->db->where('ticket_id', $_GET['ticket_id']);
            }

            if (!empty($_GET['ticket_type'])) {
                $this->db->where('ticket_type', $_GET['ticket_type']);
            }

            if (!empty($_GET['ticket_status'])) {
                $this->db->where('status', $_GET['ticket_status']);
            }

            if (!empty($_GET['created_at'])) {
                $this->db->where('DATE(t.created_at)', $_GET['created_at']);
            }
        }


        if ($total == 1) {
            $query = $this->db->get();
            $query = $query->num_rows();
        }

        if ($total == 0) {
            $query = $this->db->get('', $per_page, $offset);
            $query = $query->result();
        }
        return $query;
    }
    /* ======================================
    Get All Tickets Area End
    ======================================== */



    public function get_public_tickets()
    {
        $this->db->select('t.*, t.id as ticketId, u.name as user_name, u.images as user_image, c.title as category_name');
        $this->db->from('tickets_list t');
        $this->db->join('users u', 'u.id=t.user_id');
        $this->db->join('category_list c', 'c.id=t.cat_id');
        $this->db->where('t.ticket_type', 'public');
        $query = $this->db->get();
        return $query->result();
    }
    /* ======================================
    Get Public Tickets Area End
    ======================================== */


    public function ticket_select_by_ticket_id($id)
    {
        $this->db->select('t.*, t.id as ticketId, u.name as user_name, u.images as user_image, c.title as category_name');
        $this->db->from('tickets_list t');
        $this->db->join('users u', 'u.id=t.user_id');
        $this->db->join('category_list c', 'c.id=t.cat_id');
        $this->db->where('t.ticket_id', $id);
        $query = $this->db->get();
        return $query->row();
    }
    /* ======================================
    Ticket Select By tickets Id Area end
    ======================================== */



    public function get_admin_info()
    {
        $this->db->from('users');
        $this->db->where('user_role', 'admin');
        $query = $this->db->get();
        return $query->row();
    }
    /* ======================================
    Get Admin info area end
    ======================================== */



    public function get_tickets()
    {
        $this->db->select('t.*, t.id as ticketId, u.name as user_name');
        $this->db->from('tickets_list t');
        $this->db->join('users u', 'u.id=t.user_id');
        $this->db->order_by("FIELD(t.priority, 'very urgent', 'high', 'medium', 'low')");
        $this->db->order_by("t.id", 'DESC');
        $query = $this->db->get();
        return $query->result_array();
    }
    /* ======================================
    Get Tickets Area ENd
    ======================================== */



    public function ticket_info_by_id($ticket_id)
    {
        $this->db->select('t.*, t.id as ticketId, u.id as user_id, u.name as user_name, u.email as user_email, u.user_role as user_role, u.username as username, u.phone as user_phone, u.images as user_image');
        $this->db->from('tickets_list t');
        $this->db->join('users u', 'u.id=t.user_id');
        $this->db->where('t.ticket_id', $ticket_id);
        $query = $this->db->get();
        return $query->row_array();
    }
    /* ======================================
    Get Ticket info by Ticket id
    ======================================== */


    public function get_my_tickets($id)
    {
        $this->db->select('t.*, t.id as ticketId, u.name as user_name');
        $this->db->from('tickets_list t');
        $this->db->join('users u', 'u.id=t.user_id');
        $this->db->order_by("FIELD(t.priority, 'very urgent', 'high', 'medium', 'low')");
        $this->db->where('t.user_id', $id);
        $query = $this->db->get();
        return $query->result_array();
    }
    /* ======================================
    Get ticket by id area end
    ======================================== */


    public function chat_select_by_ticket_id($id)
    {
        $this->db->select('c.*,s.name as sender_name,s.images as sender_image,r.name as receiver_name,r.images as receiver_image');
        $this->db->from('chat_list c');
        $this->db->join('users s', 's.id = c.send_id', 'left');
        $this->db->join('users r', 'r.id = c.receive_id', 'left');
        $this->db->where('c.ticket_id', $id);
        $query = $this->db->get();
        return $query->result();
    }
    /* ======================================
    Get ticket by id area end
    ======================================== */


    public function check_unseen_msg_by_ticket_id($id)
    {
        $this->db->select('id');
        $this->db->from('chat_list');
        $this->db->where('ticket_id', $id);
        $this->db->where('receive_id', auth('id'));
        $this->db->where('status', 'unseen');
        $query = $this->db->get();
        return array_column($query->result(), 'id');
    }
    /* ======================================
    Check unseen msg by ticket id with receive Id
    ======================================== */



    public function count_unseen_msg_by_ticket_id($id)
    {
        $this->db->select();
        $this->db->from('chat_list');
        $this->db->where('ticket_id', $id);
        $this->db->where('receive_id', auth('id'));
        $this->db->where('status', 'unseen');
        $query = $this->db->get();
        return $query->num_rows();
    }
    /* ======================================
    count unseen mg by tickets id area end
    ======================================== */



    public function last_msg_with_time($id)
    {
        $this->db->select('message, created_at');
        $this->db->from('chat_list');
        $this->db->where('ticket_id', $id);
        $this->db->order_by('created_at', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->row();
    }
    /* ======================================
        Last msg with time area end
    ======================================== */



    public function get_new_ticket_by_id($id)
    {
        $this->db->select();
        $this->db->from('tickets_list');
        $this->db->where('ticket_id', $id);
        $this->db->where('status', 'new');
        $query = $this->db->get();
        return $query->row();
    }
    /* ======================================
    Get New Ticket By Id Area ENd
    ======================================== */



    public function count_chat_by_ticket_id($id)
    {
        $this->db->select();
        $this->db->from('chat_list');
        $this->db->where('ticket_id', $id);
        $query = $this->db->get();
        return $query->num_rows();
    }
}
