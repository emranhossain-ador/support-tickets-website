<?php
defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists('__user_role')) {
    function __user_role($status)
    {
        return '<span class="user_role ' . $status . '">' . $status . '</span>';
    }
}


if (!function_exists('__editBtn')) {
    function __editBtn($url, $id)
    {
        return '<a href="' . base_url($url . '/' . $id) . '" class="btn action_btn btn_primary mr-2"><i class="fa fa-edit"></i>&nbsp;Edit</a>';
    }
}


if (!function_exists('__deleteBtn')) {
    function __deleteBtn($id, $table)
    {
        return '<a href="' . base_url('item-delete/' . $id . '/' . $table) . '" class="btn action_btn btn_danger item_delete"><i class="fa-regular fa-trash-can"></i>&nbsp;Remove</a>';
    }
}


if (!function_exists('__status')) {
    function __status($id, $status, $table)
    {
        if ($status == 1) {
            $status_btn = '<a href="javascript:;" data-id="'.$id.'" data-value="0" data-table="'.$table.'" class="label label-success change_status"><i class="icofont-verification-check"></i> Live</a>';
        }else{
            $status_btn = '<a href="javascript:;" data-id="'.$id.'" data-value="1" data-table="'.$table.'" class="label label-danger change_status"><i class="icofont-ban"></i> Hide</a>';
        }

        return $status_btn;
    }
}


if (!function_exists('__csrf')) {
    function __csrf()
    {
        $ci = get_instance();
        return '<input type="hidden" name="' . $ci->security->get_csrf_token_name() . '" value="' . $ci->security->get_csrf_hash() . '">';
    }
}


if (!function_exists('__frontend_mainContent')) {
    function __frontend_mainContent($path = '', $data = [])
    {
        $ci = get_instance();
        $isAjax = $ci->input->get('isAjax');

        if (isset($isAjax) && $isAjax == 1) {
            echo $ci->load->view($path, $data, TRUE);
            exit();
        } else {
            $data['main_content'] = $ci->load->view($path, $data, TRUE);
            $ci->load->view('frontend/index', $data);
        }
    }
}



if (!function_exists('__mainContent')) {
    function __mainContent($path = '', $data = [])
    {
        $ci = get_instance();
		$isAjax = $ci->input->get('isAjax');

		if (isset($isAjax) && $isAjax==1) {
			echo $ci->load->view($path, $data, TRUE);
			exit();
		}else{
			$data['main_content'] = $ci->load->view($path, $data, TRUE);
			$ci->load->view('backend/index', $data);
		}
    }
}


if (!function_exists('__request')) {
    function __request($msg = '', $status = 0, $url = '')
    {
        $ci = get_instance();
		$isAjax = $ci->input->is_ajax_request();
		
		if ($isAjax == true) {
			
			$response = ['st' => $status, 'msg' => $msg, 'url' => $url];
			$ci->output->set_content_type('application/json')->set_output(json_encode($response));
			return;
		}else
		{
			if ($status == 1) 
			{
				$ci->session->set_flashdata('success', $msg);

				if (!empty($url)) {
					redirect($url);
				}else{
					redirect($_SERVER['HTTP_REFERER']);
				}
			}else
			{
				$ci->session->set_flashdata('error', $msg);

				if (!empty($url)) {
					redirect($url);
				}else{
					redirect($_SERVER['HTTP_REFERER']);
				}
			}
		}
    }
}



if (!function_exists('__get_first')) {
	function __get_first($info)
	{
		return explode(' ', $info[0])[0];
	}
}


if (!function_exists('__get_firstname')) {
	function __get_firstname($info)
	{
		return explode(' ', $info)[0];
	}
}


if (!function_exists('__ticket_priority')) {
    function __ticket_priority($status){
        if ($status == 'low') {
            $priority = '<label class="label label-warning">Low</label>';
        }else if($status == 'medium'){
            $priority = '<label class="label label-primary">Medium</label>';
        }else if($status == 'high'){
            $priority = '<label class="label label-orange">High</label>';
        }else if($status == 'very urgent'){
            $priority = '<label class="label label-danger">Very Urgent</label>';
        }

        return $priority ?? '';
    }
}



if(!function_exists('__ticket_status')){
    function __ticket_status($status)
    {
        if ($status == 'open') {
            $st = '<span class="type-status open">Open</span>';
        }else if($status == 'inprogress'){
            $st = '<span class="type-status inprogress">Inprogress</span>';
        }else if($status == 'close'){
            $st = '<span class="type-status close">Close</span>';
        }else{
            $st = '<span class="type-status new">New</span>';
        }

        return $st;
    }
}