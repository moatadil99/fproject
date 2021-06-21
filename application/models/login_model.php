<?php
class login_model extends CI_Model{
  public function fetchUser($user_name,$password){
	$query = $this->db->query("SELECT * FROM `users` WHERE `username`='$user_name' AND `password`='$password'");

			if ($query->num_rows()) {
				$result=$query->result_array();
				
				$this->session->set_userdata('user_id',$result[0]['uid']);
				redirect('admin/dashboard');
			}
			else
			{
				$this->session->set_flashdata('error', 'Invalid Credentials');
				redirect('admin/login');

			}
}
}
 ?>
