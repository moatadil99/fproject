<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class blog extends CI_Controller {

	
	public function index()
	{
                $this->load->model('blog_model','bm');
                $result=$this->bm->fetshArticles();
                $data['result']=$result;
		$this->load->view('adminpanel/blog_view',$data);
	}
	public function addBlog()
	{
		$this->load->view('adminpanel/addBlog_view');
	}
	public function addBlog_post()
	{
		if($_FILES){          

                        $config['upload_path']= './assets/upload/blogimg/';
                         $config['allowed_types']= 'gif|jpg|png|jpeg';
                                
                         $this->load->library('upload', $config);
                         $this->upload->initialize($config);
                        if ( ! $this->upload->do_upload('file'))
                        {
                                $error = array('error' => $this->upload->display_errors());
                                $title=$_POST['blog_title'];
                                $desc=$_POST['desc'];

                                $this->load->model('blog_model');
                                $this->blog_model->addBlog_post($fileurl,$title,$desc);
                        }
                        else
                        {
                                $data = array('upload_data' => $this->upload->data());
                                $fileurl="assets/upload/blogimg/".$data['upload_data']['file_name'];
                                $title=$_POST['blog_title'];
                                $desc=$_POST['desc'];

                                $this->load->model('blog_model');
                                $this->blog_model->addBlog_post($fileurl,$title,$desc);
                       }

        }
               

	}

        public function editBlog($blog_id)
        {
                 $this->load->model('blog_model','bm');
                $data['result']=$this->bm->editBlog($blog_id);
                $data['blog_id']=$blog_id;
                $this->load->view('adminpanel/edit_view',$data);

        }
        public function deleteBlog()
        {
                $delete_id=$_POST['delete_id'];
                $qu=$this->db->query("DELETE FROM `articles` WHERE `blogid`='$delete_id'");
                if($qu){
                        echo "delete";
                }
                else
                {
                        echo "nodelete";
                }


        }

        public function editBlog_post()
        {
                if($_FILES['file']['name'])
                {
                        $config['upload_path']          = './assets/upload/blogimg/';
                         $config['allowed_types']        = 'gif|jpg|png|jpeg';
                                
                         $this->load->library('upload', $config);
                         $this->upload->initialize($config);
                        if ( ! $this->upload->do_upload('file'))
                        {
                                $error = array('error' => $this->upload->display_errors());
                                print_r($error);
                                //$this->load->view('upload_form', $error);
                        }
                        else
                        {
                                $data = array('upload_data' => $this->upload->data());
                                $fileurl="assets/upload/blogimg/".$data['upload_data']['file_name'];
                                $title=$_POST['blog_title'];
                                $desc=$_POST['desc'];
                                $blog_id=$_POST['blog_id'];
                                $publish_unpublish=$_POST['publish_unpublish'];
                                $this->load->model('blog_model');
                                $this->blog_model->editBlogWithFile_post($fileurl,$title,$desc,$blog_id,$publish_unpublish);

                       }
                }
                else
                {
                                $title=$_POST['blog_title'];
                                $desc=$_POST['desc'];
                                $publish_unpublish=$_POST['publish_unpublish'];
                                $blog_id=$_POST['blog_id'];
                                $this->load->model('blog_model');
                                $this->blog_model->editBlogWithoutFile_post($title,$desc,$blog_id,$publish_unpublish);
                              
                }
        }
}
