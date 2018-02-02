<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mymodel extends CI_Model{

function add($data){		
		if($this->db->insert('user',$data)){
			echo"ok";
		}else{
			echo "Sorry";
		}
	}

	function show_user(){
		$query = $this->db->get('user');
		return $query->result_array();
	}

	function forUpdate($id){
		$this->db->where('id',$id);
		$query = $this->db->get('user');
		return $query->result_array();
	}

	function delete($id){
		$this->db->where('id',$id);
		$this->db->delete('user');
	}

	function login($login,$password){
		$this->db->where('login',$login);
		$this->db->where('password',$password);
		$this->db->limit(1);
		$query = $this->db->get('user');
		return $query->result_array();
	}

	function update($id,$data){
		$this->db->where('id',$id);
		$this->db->update('user',$data);
	}

}
?>
