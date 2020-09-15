<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sign_Up extends CI_Controller {

	public function index()
	{
		$this->load->view('sign_up_view');
	}
	public function signup()
	{
		$this->db->select('*');
		$this->db->from('user_db');
		$this->db->where("email", $_REQUEST['email']);
		$result = $this->db->count_all_results();
		if($result == 1 ){
			echo "1";
			return;
		}
		$data = array(
			'name' => $_REQUEST['name'],
			'email' => $_REQUEST['email'],
			'password' => md5($_REQUEST['pass'])
		);
		$this->db->insert('user_db', $data);
		echo "0";
		return;
	}
}
