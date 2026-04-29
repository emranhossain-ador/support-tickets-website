<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_login();
    }



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
            $check_username = $this->admin_m->username_exists_check_by_id($id, $username);

            if (!empty($check_username)) {
                $exists_msg = 'This username already exits!!';
            } else {
                $username = $this->input->post('username', TRUE);
            }

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

                $last_id = $this->default_m->update($data, $id,'users');

                if ($last_id) {
                    upload_img($id, 'users');
                    __request('Profile Update successful', 1, base_url('admin/profile?isAjax=1'));
                } else {
                    __request('Profile Update error!!', 0, '');
                }
            }
        }
    }
    /* ======================================
    Profile Update ARea ENd
    ======================================== */



    public function item_delete($id, $table)
    {
        $delete_id = $this->default_m->delete($id, $table);

        if($delete_id){
            __request('Item delete successful', 1, '');
        }else{
            __request('Something want wrong!!', 0, '');
        }
    }
    /* ======================================
    Item delete area end
    ======================================== */



    public function change_status()
    {
        $id = $this->input->post('id', TRUE);
        $table = $this->input->post('table', TRUE);
        $status = $this->input->post('status', TRUE);

        $data = ['status' => $status];

        $last_id = $this->default_m->update($data, $id, $table);

        if ($last_id) {
            echo json_encode(['st' => 1, 'value' => $status]);
        }else{
            echo json_encode(['st' => 0, 'value' => $status]);
        }
    }
}
