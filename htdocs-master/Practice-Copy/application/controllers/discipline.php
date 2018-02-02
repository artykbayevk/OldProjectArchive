<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Discipline extends CI_Controller {
	public function math(){
		$this->load->library('session');
		if($this->session->userdata('uid')==null){
			header("Location:".base_url()."index.php/welcome1");
		}
		$this->load->view('math.php');
		$this->load->library('session');
	}
	public function software(){
		$this->load->library('session');
		if($this->session->userdata('uid')==null){
			header("Location:".base_url()."index.php/welcome1");
		}
		$this->load->view('software.php');
		$this->load->library('session');
	}
	public function hardware(){
		$this->load->library('session');
		if($this->session->userdata('uid')==null){
			header("Location:".base_url()."index.php/welcome1");
		}
		$this->load->view('hardware.php');
		$this->load->library('session');
	}
	public function programming(){
		$this->load->library('session');
		if($this->session->userdata('uid')==null){
			header("Location:".base_url()."index.php/welcome1");
		}
		$this->load->view('programming.php');
		$this->load->library('session');
	}
	public function lang(){
		$this->load->library('session');
		if($this->session->userdata('uid')==null){
			header("Location:".base_url()."index.php/welcome1");
		}
$this->load->view('lang.php');
		$this->load->library('session');
	}
}
