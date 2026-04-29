<?php
defined('BASEPATH') or exit('No direct script access allowed');

//----- User Info -----//
if (!function_exists('__user_info')) {
    function __user_info()
    {
        $ci = &get_instance();
        $user_id = auth('id');

        if (!$user_id) {
            return null;
        } else {
            $ci->db->from('users');
            $ci->db->where('user_role', 'customer');
            $ci->db->where('id', $user_id);
            $query = $ci->db->get();
            $user_info = $query->row();
            return $user_info;
        }
    }
}


//----- Admin Info -----//
if (!function_exists('__admin_info')) {
    function __admin_info()
    {
        $ci = &get_instance();
        $info = $ci->admin_m->get_admin_info();
        return $info;
    }
}


//----- User Login Checked -----//
if (!function_exists('is_login')) {
    function is_login()
    {
        $ci = &get_instance();

        if (auth('is_login') != true) {
            $ci->session->sess_destroy();
            redirect(base_url('login'));
        }
    }
}


//----- Check valid Admin -----//
if (!function_exists('__check_valid_admin')) {
    function __check_valid_admin()
    {
        $ci = &get_instance();

        if (auth('is_admin') != TRUE) {
            $ci->session->sess_destroy();
            redirect(base_url('login'));
        }
    }
}


//----- Check valid User -----//
if (!function_exists('__check_valid_user')) {
    function __check_valid_user()
    {
        $ci = &get_instance();

        if (auth('is_user') != TRUE) {
            $ci->session->sess_destroy();
            redirect(base_url('login'));
        }
    }
}

if (!function_exists('auth')) {
    function auth($string, $arr = [])
    {
        $ci = &get_instance();
        if (!empty($arr)) {
            $arrData = $ci->session->userdata($arr);
            if (is_array($arrData) && isset($arrData[$string])) {
                return $arrData[$string];
            }
            return NULL;
        }


        $data = $ci->session->userdata($string);

        if (is_string($data)) {
            return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
        }

        return $data;
    }
}
