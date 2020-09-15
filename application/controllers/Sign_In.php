<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sign_In extends CI_Controller {

	public function index()
	{
		$this->load->view('sign_in_view');
	}
	public function signin()
	{
		$this->db->select('*');
		$this->db->from('user_db');
		$this->db->where("email", $_REQUEST['email']);
		$this->db->where("password", md5($_REQUEST['pass']));
		$result = $this->db->count_all_results();
		if($result == 1 ){
			$this->db->select('*');
			$this->db->where("email", $_REQUEST['email']);
			$this->db->where("password", md5($_REQUEST['pass']));
			$query = $this->db->get('user_db');
			foreach ($query->result() as $row)
			{
					$user_id = $row->id;
					$user_name = $row->name;
			}
			$this->session->set_userdata('user_id', $user_id);
			$this->session->set_userdata('user_name', $user_name);
			echo "1";
			return;
		}else{
			echo "0";
			return;
		}	
	}
}

