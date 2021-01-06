<?php

class Auth extends CI_Controller
{
		public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}



	public function login()
	{
		$this->form_validation->set_rules('username', 'Username','required');
		$this->form_validation->set_rules('password', 'Password','required');
		if($this->form_validation->run()==false)
		{
		$this->load->view('templates/header');
		$this->load->view('form_login');
		$this->load->view('templates/footer');
	}else{
		//valid suces
		$this->login();
	}
	

	
	
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$username =$this->db->get_where('tb_user', ['username' =>$username])->row_array();
		

		
			if($username['role_id']==1){
					$this->session->set_flashdata('message');
					redirect('admin/dashboard_admin');
				}
				if($username['role_id']==2){
					$this->session->set_flashdata('message');
					redirect('dashboard');
				
			}
		}
	}
	
