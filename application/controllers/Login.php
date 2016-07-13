<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Login extends CI_Controller{
	public function index()
	{	
		$this->load->helper('form');
		$this->load->view('templates/login_header_logo');
		$this->load->view('login');
	}
}