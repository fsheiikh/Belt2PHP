<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Friends extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User');
		$this->load->library('form_validation');
		// $this->output->enable_profiler(TRUE);



	}

	public function addfriend($id, $fid)
	{
		$this->User->addfriend($id, $fid);
		redirect("/registration/redirect/".$id);

	}

	public function viewfriend($id)
	{
		$view = $this->User->viewfriend($id);
		$this->load->view('viewpage', array('view'=>$view));

	}

	public function deletefriend($id, $fid)
	{
		$view = $this->User->deletefriend($id, $fid);
		redirect("/registration/redirect/".$id);

	}

	public function deleteadded($id, $fid)
	{
		$view = $this->User->deleteadded($id, $fid);
		redirect("/registration/redirect/".$id);

	}


	
}

?>