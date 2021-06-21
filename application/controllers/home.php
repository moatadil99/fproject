<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	
	public function index()
	{
		$this->load->model('article_model','am');
		$data['result']=$this->am->fetshArticle();
		$this->load->view('home_page',$data);
	}

	public function blog_detail($blog_id )
	{
		$this->load->model('article_model','am');
		$result=$this->am->detailBlog($blog_id);
		$data['result']=$result;
		$this->load->view('detailBlog_view',$data);

	}
}
