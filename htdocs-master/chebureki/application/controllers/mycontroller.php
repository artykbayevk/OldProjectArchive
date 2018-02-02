<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mycontroller extends CI_Controller {

	public function index(){

		$this->load->view('myview');
	}

	public function second(){
		$this->load->model('mymodel');
		$data['user'] = $this->mymodel->show_user();
		$this->load->view('second_view',$data);
	}

	public function third(){
		$this->load->view('third_view');
	}

	public function fourth(){
		$this->load->library('session');
		if($this->session->userdata('user_id')==null){
			header("Location:".base_url()."index");
		}
		$this->load->library('session');
		$this->load->view('fourth_view');
	}

	public function toupdate(){
		$id = $_POST['id'];
		$this->load->model('mymodel');
		$data['user'] = $this->mymodel->forUpdate($id);
		$this->load->view('fivth_view',$data);
	}

	public function update(){
		$id=$_POST['id'];
		$data['name']=$_POST['name'];
		$data['surname']=$_POST['surname'];
		$data['login']=$_POST['login'];
		$this->load->model('mymodel');
		$this->mymodel->update($id,$data);
		header("Location:".base_url()."second");
	}

	public function add(){
		$name = $_POST['name'];
		$surname = $_POST['surname'];
		$login = $_POST['login'];
		$password = $_POST['password'];

		$data['name'] = $name;
		$data['surname'] = $surname;
		$data['login'] = $login;
		$data['password'] = $password;

		$this->load->model('mymodel');
		$this->mymodel->add($data);
		header("Location:".base_url()."second");
	}

	public function delete(){
		$id = $_POST['id'];
		$this ->load->model('mymodel');
		$this ->mymodel->delete($id);
		header("Location:".base_url()."second");
	}

	public function login(){
		//Мы взяли данные
		$login = $_POST['login'];
		$password = $_POST['password'];
		//Подгрузили модель
		$this->load ->model('mymodel');
		$data=$this->mymodel->login($login,$password);
		//Сохранили в data данные которые мы получили от модели
		if(count($data)>0){
			$this->load->library('session');
			$session_data = array(
				'user_id'=> $data[0]['id'],
				'user_login'=>$data[0]['login'],
				);
			$this->session->set_userdata($session_data);
			//ВОТ ДО ЭТОГО МЕСТА
			header("Location:".base_url()."fourth");
			//Если все окей то переходи на первую страницу
		}else{
			echo "error";
			//Если все не окей то тебе капец
		}
	}

	public function logout(){
		$this->load->library('session');
		$this->session->sess_destroy();
		header("Location:".base_url()."index");
	}


}
