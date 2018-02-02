<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dbmodel extends CI_Model{

	function registration($data){
		if($this->db->insert('user',$data)){
			echo"ok";
		}else{
			echo "Sorry";
		}
	}
	function show_users(){
		$query = $this->db->get('users');
		return $query->result_array();
	}
	function delete($id){
		$this->db->where('id',$id);
		$this->db->delete('users');
	}
	function login($username,$password){
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$this->db->limit(1);
		$query = $this->db->get('users');
		return $query->result_array();
	}
}
?>
