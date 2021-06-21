<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {

	
	public function index()
	{		
		if(isset($_SESSION['user_id']))
		{
			$this->load->view('adminpanel/dashboard_view');
		}
		else
		{
			redirect('admin/login');
		}
	}
}
