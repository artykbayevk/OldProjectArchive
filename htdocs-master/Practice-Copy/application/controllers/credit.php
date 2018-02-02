<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Credit extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->library('session');
		if($this->session->userdata('uid')==null){
			header("Location:".base_url()."index.php/welcome1");
		}
	$this->load->model('creditmodel');
	$data['credit'] = $this->creditmodel->show_grade();
	$this->load->view('credits',$data);
	}
	public function delete(){

		$id = $_GET['id'];
		$this ->load->model('creditmodel');
		$this ->creditmodel->delete($id);
		header("Location:".base_url()."index.php/credit");
	}
	
		
	public function addcredit(){
		$subject=$_POST['subject'];
		$credit=$_POST['credit'];
		$price=$_POST['price'];
		$data['subject'] = $subject;
		$data['credit'] = $credit;
		$data['price'] = ($price);		
		$this->load ->model('creditmodel');
		$this->creditmodel->addcredit($data);
		header("Location:".base_url()."index.php/credit");

	}	
	public function update(){
		$this->load->view("updatecredit");
	}
	public function updateCredit(){
		$subject=$_POST['subject'];
		$credit=$_POST['credit'];
		$price=$_POST['price'];
		$data['subject'] = $subject;
		$data['credit'] = $credit;
		$data['price'] = ($price);
		$id = $_GET['id'];
		$this->load ->model('creditmodel');
		$this->creditmodel ->update($id,$data);
		header("Location:".base_url()."index.php/credit");
	}
}