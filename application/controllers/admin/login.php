<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	
	public function index()
	{
		if(isset($_SESSION['user_id']))
		{
				redirect('admin/dashboard');
		}
		$data=[];
		if(isset($_SESSION['error']))
		{
			$data['error']=$_SESSION['error'];
		}
		else{
			$data['error']="NO_ERROR";
		}

		$this->load->view('adminpanel/login_view',$data);
	}

	function login_post()
	{
		if(isset($_POST))
		{
			$user_name=$_POST['user_name'];
			$password=$_POST['password'];

			$this->load->model('login_model');
            $this->login_model->fetchUser($user_name,$password);
		}
		else
		{
			die("Invalid input");
		}
	}
	function logout(){
		session_destroy();
		redirect('admin/login');
	}
}
