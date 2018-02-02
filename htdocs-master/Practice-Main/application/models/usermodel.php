<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Usermodel extends CI_Model{
  function add($data){
		if($this->db->insert('user',$data)){
			echo"ok";
		}else{
			echo "Sorry";
		}
	}

}
?>
