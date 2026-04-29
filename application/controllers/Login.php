<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Login extends CI_Controller
{
    public function index()
    {
        $data = [];
        $data['page_title'] = 'Login';
        __frontend_mainContent('frontend/auth/login',$data);
    }
        /* ======================================
        Login Index Area end
    ======================================== */



    public function register()
    {
        $data = [];
        $data['page_title'] = 'Registration';
        __frontend_mainContent('frontend/auth/register',$data);
    }
    /* ======================================
    Register Area End
    ======================================== */



    public function signup()
    {
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]',['is_unique' => 'This email already exists!!']);
        $this->form_validation->set_rules('username', 'Username', 'alpha_numeric|is_unique[users.username]',['is_unique' => 'This username already exists!!']);
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|matches[password]');

        if ($this->form_validation->run() == FALSE) {
            __request(validation_errors(), 0, '');
        }else
        {
            $post = $this->input->post(null, true);
            $data = [
                'name'       => $post['name'],
                'email'      => $post['email'],
                'username'   => $post['username'],
                'password'   => password_hash($post['password'], PASSWORD_DEFAULT),
                'created_at' => d_time()
            ];

            $last_id = $this->default_m->insert($data,'users');

            if ($last_id) {
                __request('Register successful', 1, base_url('login?isAjax=1'));
            }else{
                __request('Register error!!', 0, '');
            }
        }
    }
    /* ======================================
    Signup Area End
    ======================================== */



    public function signin()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            __request(validation_errors(), 0, '');
        }else{
            $email = $this->input->post('email', TRUE);
            $password = $this->input->post('password', TRUE);
            
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $this->db->where('email', $email);
                $invalid_msg = 'This email invalid!!';
            }else{
                $this->db->where('username', $email);
                $invalid_msg = 'This username is invalid!!';
            }

            $user_info = $this->db->get('users')->row();

            if (!$user_info) {
                __request($invalid_msg, 0, '');
            }else{
                $user = $this->default_m->user_login($email, $password);

                if ($user) 
                {
                    $user_data = [
                        'id' => $user->id,
                        'user_role' => $user->user_role,
                        'is_login' => true
                    ];

                    $this->session->set_userdata($user_data);

                    if ($user->user_role == 'admin') {
                        $this->session->set_userdata('is_admin', true);
                        __request('Login Successful', 1, base_url('admin/dashboard'));
                    }else{
                        $this->session->set_userdata('is_user', true);
                        __request('Login Successful', 1, base_url('customer/dashboard'));
                    }
                }else{
                    __request("Password don't match!!", 0, '');
                }
                    


                // if($is_login){
                //     $this->session->set_userdata('user_info', $is_login);

                //     if (__user_info()->user_role == 'admin') {
                //         __request('Login Successful', 1, base_url('admin/dashboard'));
                //     }else{
                //         __request('Login Successful', 1, base_url('customer/dashboard'));
                //     }

                // }else{
                //     __request("Password don't match!!", 0, '');
                // }
            }

        }
    }
    /* ======================================
    SignIn Area ENd
    ======================================== */



    public function logout()
    {
        $this->session->unset_userdata('user_info');
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}
