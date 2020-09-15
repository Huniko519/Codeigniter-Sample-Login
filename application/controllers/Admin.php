<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('user_id') == ""){
			redirect(base_url().'Sign_In');
		}else{
			$this->load->view('admin_view');
		}
	}
}
