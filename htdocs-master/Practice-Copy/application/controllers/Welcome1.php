<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome1 extends CI_Controller {

	public function index()
	{
		$this->load->view('reg.php');
		$this->load->library('session');
	}
}
