<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent:: __construct();
        is_login();
        __check_valid_admin();
        $this->per_page = 10;
        $this->load->library('pagination');
    }

    public function index()
    {
        $data = [];
        $data['page_title'] = 'Dashboard';
        __mainContent('backend/admin/dashboard',$data);
    }
    /* ======================================
    Dashboard index area end
    ======================================== */



    public function all_tickets()
    {
        $data = [];
        $data['page_title'] = 'All Ticket';
        $data['page'] = 'ticket';

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
        $total = $this->admin_m->get_all_tickets(0, 0, 1);
        $config['base_url'] = base_url('admin/dashboard/all_tickets');
        $config['total_rows'] = $total;
        $config['per_page'] = $per_page;
        $this->pagination->initialize($config);

        $data['tickets'] = $this->admin_m->get_all_tickets($per_page, $offset, 0);

        __mainContent('backend/admin/all_tickets',$data);
    }
    /* ======================================
    All Tickets Area ENd
    ======================================== */


}
