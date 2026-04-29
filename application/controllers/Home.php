<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Home extends CI_Controller
{
	public function index()
	{
		$data = [];
		$data['page_title'] = "Home";
		$data['page'] = "home";
		$data['category_list'] = $this->default_m->select('category_list');
		$data['tickets'] = $this->admin_m->get_public_tickets();
		$data['main_content'] = $this->load->view('frontend/home/home', $data, true);
		$this->load->view('frontend/index', $data);
	}
	/* ======================================
			Home Index area end
	======================================== */



	public function create_ticket()
	{
		if (!__user_info()) {
			redirect(base_url('login'));
		}

		$data = [];
		$data['page_title'] = 'Submit Ticket';
		$data['page'] = 'ticket';
		$data['category_list'] = $this->default_m->select('category_list');
		$data['main_content'] = $this->load->view('frontend/page/create_ticket', $data, true);
		$this->load->view('frontend/index', $data);
	}
	/* ======================================
			Create Ticket Area end
	======================================== */



	public function add_ticket()
	{
		$this->form_validation->set_rules('subject', 'Subject', 'trim|required');
		$this->form_validation->set_rules('cat_id', 'Category', 'trim|required');
		$this->form_validation->set_rules('description', 'Description', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			__request(validation_errors(), 0, '');
		} else {
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

			$last_id = $this->default_m->insert($data, 'tickets_list');

			if ($last_id) {
				upload_img($last_id, 'tickets_list');
				__request('Ticket submit successful', 1, base_url('submit-ticket'));
			} else {
				__request('Somethings want wrong!!', 0, '');
			}
		}
	}
	/* ======================================
	Add ticket area end
	======================================== */



	public function faq()
	{
		$data = [];
		$data['page_title'] = 'Faq';
		$data['faq'] = $this->default_m->select('faq');
		$data['main_content'] = $this->load->view('frontend/page/faq', $data, true);
		$this->load->view('frontend/index', $data);
	}
	/* ======================================
			FAQ Index Area ENd
	======================================== */



	public function knowledge()
	{
		$data = [];
		$data['page_title'] = 'knowledge';
		$data['total_knowledge'] = $this->admin_m->get_category_under_knowledge(1);
		$data['category'] = $this->admin_m->get_category_under_knowledge(0);
		$data['main_content'] = $this->load->view('frontend/page/knowledge', $data, true);
		$this->load->view('frontend/index', $data);
	}
	/* ======================================
		Knowledge Index Area End
	======================================== */



	public function view_knowledge($id)
	{
		$data = [];
		$data['page_title'] = 'View Knowledge';
		$data['knowledge'] = $this->default_m->single_select_by_id($id, 'knowledge');
		$data['main_content'] = $this->load->view('frontend/page/view_knowledge', $data, true);
		$this->load->view('frontend/index', $data);
	}
	/* ======================================
		View Knowledge Area End
	======================================== */



	public function view_ticket($ticket_id)
	{
		$data = [];
		$data['page_title'] = 'View Ticket';
		$data['ticket'] = $this->admin_m->ticket_select_by_ticket_id($ticket_id);
		$data['chat_list'] = $this->admin_m->chat_select_by_ticket_id($ticket_id);
		$data['main_content'] = $this->load->view('frontend/page/view_ticket', $data, true);
		$this->load->view('frontend/index', $data);
	}
	/* ======================================
		View ticket Area End
	======================================== */
}
