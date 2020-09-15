<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->session->set_userdata('user_id', "");
		$this->session->set_userdata('user_name', "");
		$this->load->view('welcome_view');
	}
}
