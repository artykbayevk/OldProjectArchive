<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function delete(){

		$id = $_GET['id'];
		$this ->load->model('dbmodel');
		$this ->dbmodel->delete($id);
		header("Location:".base_url()."index.php/user");
	}
	public function registration(){
		$username=$_POST['username'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$data['username'] = $username;
		$data['email'] = $email;
		$data['password'] = md5($password);
		$this->load ->model('dbmodel');
		$this->dbmodel ->registration($data);
		header("Location:".base_url()."index.php/welcome");
	}	
	public function login(){
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		$this->load ->model('dbmodel');
		$data=$this->dbmodel ->login($username,$password);
		if(count($data)>0){
			$this->load->library('session');
			$session_data = array(
				'uid'=> $data[0]['id'],
				'username'=>$data[0]['username'],
				'uemail'=>$data[0]['email']
				);
			$this->session->set_userdata($session_data);
		header("Location:".base_url()."index.php/welcome");
		}else{
			echo "error";
		}
	}
	public function logout(){
		$this->load->library('session');
		$this->session->sess_destroy();
		header("Location:".base_url()."index.php/welcome");
	}
}
