<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	public function index()
	{
		$this->load->library('session');
		if($this->session->userdata('uid')==null){
			header("Location:".base_url()."index.php/welcome1");
		}

	
	$this->load->model('modelfornews');
	$data['news'] = $this->modelfornews->show_grade();
	$this->load->view('news_list',$data);
	}
	public function delete(){

		$id = $_GET['id'];
		$this ->load->model('modelfornews');
		$this ->modelfornews->delete($id);
		header("Location:".base_url()."index.php/news");
	}
	
		
	public function addnews(){
		$name=$_POST['name'];
		$surname=$_POST['surname'];
		$grade=$_POST['grade'];
		$subject=$_POST['subject'];
		$data['name'] = $name;
		$data['surname'] = $surname;
		$data['grade'] = ($grade);
		$data['subject']=$subject;		
		$this->load ->model('modelfornews');
		$this->modelfornews ->addnews($data);
		header("Location:".base_url()."index.php/news");
	}	
	public function update(){
		$this->load->view("updategrade");
	}
	public function updateNews(){
		$name=$_POST['name'];
		$surname=$_POST['surname'];
		$grade=$_POST['grade'];
		$subject=$_POST['subject'];
		$data['name'] = $name;
		$data['surname'] = $surname;
		$data['grade'] = ($grade);
		$data['subject']=$subject;
		$id = $_GET['id'];
		$this->load ->model('modelfornews');
		$this->modelfornews ->update($id,$data);
		header("Location:".base_url()."index.php/news");
	}
}