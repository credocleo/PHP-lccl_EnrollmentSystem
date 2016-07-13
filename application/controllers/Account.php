<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Account extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->view('cache');
		if ($this->session->userdata('user'))
		{
			if ($this->session->userdata('user_type')=='Admin')
				redirect('/admin','refresh');
			
			else if ($this->session->userdata('user_type')=='Teacher')
				redirect('/teacher','refresh');
			
			else if ($this->session->userdata('user_type')=='Student')
				redirect('/student','refresh');
				
		}
	}
	public function index()
	{	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|max_length[12]|callback_username_check');
		$this->form_validation->set_rules('password', 'Password', 'required|max_length[12]');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('templates/login_header_logo');
			$this->load->view('login');
		}
		else
		{
			$this->load->model('Userlogincheck');
			$account_type = $this->Userlogincheck->checkexist($this->input->post('username'),$this->input->post('password'));
			$account_type->row()->account_type;
			$this->session->set_userdata('user',$this->input->post('username'));
			$this->session->set_userdata('user_type',$account_type->row()->account_type);
			redirect('','refresh');
			//redirect('admin','refresh');
			//$this->load->view('user_home');
		}
	}		
	public function username_check($str)	
	{	$this->load->model('Userlogincheck');
		if($this->Userlogincheck->checkexist($this->input->post('username'),$this->input->post('password'))->num_rows()<1)	
		{
			$this->form_validation->set_message('username_check', 'Invalid username/password!');
			return FALSE;
		}

		else
		{
			return TRUE;
		}
	}
	

	
}