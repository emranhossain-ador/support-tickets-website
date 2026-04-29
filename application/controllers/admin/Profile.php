<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_login();
        __check_valid_admin();

        $this->per_page =  10;
        $this->load->library('pagination');
    }

    public function index()
    {
        $data = [];
        $data['page_title'] = 'Profile';
        __mainContent('backend/admin/profile', $data);
    }
    /* ======================================
    Profile area end
    ======================================== */



    public function customer_list()
    {
        $data = [];
        $data['page_title'] = 'Customer List';
        $data['page'] = 'user';

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
        $total = $this->admin_m->get_all_customers(0, 0, 1);
        $config['base_url'] = base_url('admin/profile/customer_list');
        $config['total_rows'] = $total;
        $config['per_page'] = $per_page;
        $this->pagination->initialize($config);

        $data['customer_list'] = $this->admin_m->get_all_customers($per_page, $offset, 0);
        __mainContent('backend/admin_activities/customer_list', $data, true);
    }
    /* ======================================
    Customer Index area end
    ======================================== */



    public function add_customer()
    {
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            __request(validation_errors(), 0, '');
        } else {
            $post = $this->input->post(null, true);
            $email = $post['email'];

            $id = $this->input->post('id', TRUE) ?? 0;

            if ($id != 0) {
                $check_email = $this->admin_m->email_exists_check_by_id($id, $email);
            } else {
                $check_email = $this->admin_m->email_exists_check($email);
            }

            if (!empty($check_email)) {
                __request('This email already exists!!');
            } else {

                $data = [
                    'name'       => $post['name'],
                    'email'      => $email,
                    'phone'   => $post['phone'],
                    'password'   => password_hash(123, PASSWORD_DEFAULT),
                    'created_at' => d_time()
                ];

                if ($id == 0) {
                    $last_id = $this->default_m->insert($data, 'users');
                } else {
                    $last_id = $this->default_m->update($data, $id, 'users');
                }

                if ($last_id) {
                    __request('Save change successful', 1, base_url('admin/profile/customer_list?isAjax=1'));
                } else {
                    __request('Save change error!!', 0, '');
                }
            }
        }
    }
    /* ======================================
    Add Customer Area End
    ======================================== */



    public function agent_list()
    {
        $data = [];
        $data['page_title'] = 'Agent List';
        $data['page'] = 'user';
        __mainContent('backend/admin_activities/agent_list', $data);
    }
    /* ======================================
    Agent List Index Area End
    ======================================== */



    public function edit_agent($id)
    {
        $data = [];
        $data['page_title'] = 'Edit Agent';
        $data['page'] = 'user';
        __mainContent('backend/admin_activities/edit_agent', $data);
    }
    /* ======================================
    Agent Edit Area End
    ======================================== */



    public function category()
    {
        $data = [];
        $data['page_title'] = 'Category';
        $data['page'] = 'setup';
        $data['category_list'] = $this->default_m->select('category_list');
        __mainContent('backend/category/category', $data);
    }
    /* ======================================
    Category Index Area End
    ======================================== */



    public function add_category()
    {
        $this->form_validation->set_rules('category', 'Category', 'trim|required');

        if ($this->form_validation->run() == false) {
            __request(validation_errors(), 0, '');
        }else{
            $data = [
                'title' => $this->input->post('category', TRUE),
                'created_at' => d_time()
            ];

            $id = $this->input->post('id', TRUE);

            if ($id == 0) {
                $last_id = $this->default_m->insert($data,'category_list');
            }else{
                $last_id = $this->default_m->update($data, $id, 'category_list');
            }

            if ($last_id) {
                __request('Save change successful', 1, base_url('admin/profile/category?isAjax=1'));
            }else{
                __request('Save change error!!', 0, '');
            }
        }
    }
    /* ======================================
        Add Category Area End
    ======================================== */



    public function edit_category($id)
    {
        $data = [];
        $data['page_title'] = 'Edit Category';
        $data['page'] = 'setup';
        $data['category_list'] = $this->default_m->select('category_list');
        $data['category'] = $this->default_m->single_select_by_id($id,'category_list');
        __mainContent('backend/category/category', $data);
    }



    public function faq()
    {
        $data = [];
        $data['page_title'] = 'FAQ';
        $data['page'] = 'faq';
        $data['faq'] = $this->default_m->select('faq');
        __mainContent('backend/faq/faq', $data);
    }
    /* ======================================
    Faq Index area end
    ======================================== */



    public function create_faq()
    {
        $data = [];
        $data['page_title'] = 'FAQ';
        $data['page'] = 'faq';
        __mainContent('backend/faq/create_faq', $data);
    }
    /* ======================================
    Create FAQ area end
    ======================================== */



    public function add_faq()
    {
        $this->form_validation->set_rules('title', 'Title', 'trim|required');
        $this->form_validation->set_rules('description', 'Description', 'trim|required');

        if ($this->form_validation->run() == false) {
            __request(validation_errors(), 0, '');
        }else{
            $data = [
                'title' => $this->input->post('title', TRUE),
                'description' => $this->input->post('description', TRUE),
                'created_at' => d_time()
            ];

            $id = $this->input->post('id', TRUE);

            if ($id == 0) {
                $last_id = $this->default_m->insert($data,'faq');
            }else{
                $last_id = $this->default_m->update($data, $id, 'faq');
            }

            if ($last_id) {
                __request('Save change successful', 1, base_url('admin/profile/faq?isAjax=1'));
            }else{
                __request('Save change error!!', 0, '');
            }
        }
    }



    public function edit_faq($id)
    {
        $data = [];
        $data['page_title'] = 'Edit FAQ';
        $data['page'] = 'faq';
        $data['faq'] = $this->default_m->single_select_by_id($id,'faq');
        __mainContent('backend/faq/create_faq', $data);
    }
    /* ======================================
    Edit FAQ Area end
    ======================================== */



    public function knowledge()
    {
        $data = [];
        $data['page_title'] = 'Knowledge';
        $data['page'] = 'knowledge';
        $data['knowledge'] = $this->admin_m->get_knowledge_with_cat();
        __mainContent('backend/knowledge/knowledge', $data);
    }
    /* ======================================
    Knowledge index area end
    ======================================== */



    public function create_knowledge()
    {
        $data = [];
        $data['page_title'] = 'Create Knowledge';
        $data['page'] = 'knowledge';
        $data['category_list'] = $this->default_m->select('category_list');
        __mainContent('backend/knowledge/create_knowledge', $data);
    }
    /* ======================================
    Knowledge index area end
    ======================================== */



    public function add_knowledge()
    {
        $this->form_validation->set_rules('title', 'Title', 'trim|required');
        $this->form_validation->set_rules('cat_id', 'Category', 'trim|required');
        $this->form_validation->set_rules('details', 'Description', 'trim|required');
        
        if ($this->form_validation->run() == false) {
            __request(validation_errors(), 0, '');
        }else{
            $post = $this->input->post(null, TRUE);

            $data = [
                'title'      => $post['title'],
                'cat_id'     => $post['cat_id'],
                'details'    => $post['details'],
                'created_at' => d_time()
            ];

            $id = $post['id'];

            if ($id == 0) {
                $last_id = $this->default_m->insert($data, 'knowledge');
            }else{
                $last_id = $this->default_m->update($data, $id,'knowledge');
            }

            if ($last_id) {
                __request('Save change successful', 1, base_url('admin/profile/knowledge?isAjax=1'));
            }else{
                __request('Save change error!!', 0, '');
            }
        }
    }



    public function edit_knowledge($id)
    {
        $data = [];
        $data['page_title'] = 'Edit Knowledge';
        $data['page'] = 'knowledge';
        $data['knowledge'] = $this->default_m->single_select_by_id($id,'knowledge');
        $data['category_list'] = $this->default_m->select('category_list');
        __mainContent('backend/knowledge/create_knowledge', $data);
    }
    /* ======================================
    Knowledge index area end
    ======================================== */
}
