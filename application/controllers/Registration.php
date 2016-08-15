<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User');
		$this->load->library('form_validation');
		// $this->output->enable_profiler(TRUE);

	}

	public function index()
	{
		$this->load->view('main');
		
	}

	public function register()
	{
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('alias', 'Alias', 'required|is_unique[users.alias]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[8]|matches[confirm_password]|trim');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'matches[password]|trim');
		$this->form_validation->set_rules('dob', 'Date of Birth', 'required');
		if($this->form_validation->run() == TRUE)
		{	
			$this->User->create($this->input->post());
			$this->session->set_flashdata('errors', 'You are Registered!');
			redirect("/");
		} 
		else
		{
			$this->session->set_flashdata('errors', validation_errors());
			redirect("/");
			
		}
	}

	public function login()
	{	$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');

		if($this->form_validation->run() == TRUE)
		{
			$user_info = $this->User->login($this->input->post());
		if (password_verify($this->input->post('password'), $user_info['password'])) {
			$this->session->set_userdata('id',$user_info['id']);
			$this->session->set_userdata('alias',$user_info['alias']);
			redirect("/registration/redirect/".$user_info['id']);

		}
		
		} else {
		    $this->session->set_flashdata('errors', validation_errors());
			redirect("/");
			
		}
	}
	public function logout()
	{
		 $this->session->set_flashdata('errors', 'you have logged out');
		 $user_info = null;
		 $this->session->set_userdata('id',null);
		 $this->session->set_userdata('name',null);
		 $this->session->set_userdata('alias',null);
		 redirect("/");
	}



	public function redirect($id)
	{	

		$allusers = $this->User->getall($id);
		$myfriends = $this->User->getfriends($id);
		$addedme = $this->User->addedfriends($id);
		$this->load->view('page', array('allusers'=>$allusers, 'friends'=>$myfriends, 'added'=>$addedme));

	}

	

	
}