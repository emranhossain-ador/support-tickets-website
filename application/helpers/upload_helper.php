<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function upload_img($id, $table)
{
    // echo $id;exit();
    if (!empty($_FILES['file']['name'])) 
    {
        $ci = get_instance(); 

        $up_load = $ci->upload_m->upload(400);

        if ($up_load['st'] == 1) :
            foreach ($up_load['data'] as $key => $value) {
                $data = array(
                    'images' => $value['image'],
                    'thumb' => $value['thumb'],
                );
                $ci->default_m->update($data, $id, $table);
            }
            return true;
        else :
            $ci->session->set_flashdata('success', $up_load['data']['error']);
        endif;
    }

    

}

if (!function_exists('__staffAction')) {
    function __staffAction($order_id, $staff_id, $action_type)
    {
    $ci = get_instance();
    $data = $ci->system_model->log_order_activity($order_id, $staff_id, $action_type);
    return $data;
    }
}


