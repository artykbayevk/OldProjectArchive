<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Creditmodel extends CI_Model{

	function addcredit($data){		
		if($this->db->insert('credit',$data)){
			echo"ok";
		}else{
			echo "Sorry";
		}
	}
	function show_grade(){
		$query = $this->db->get('credit');
		return $query->result_array();
	}
	function delete($id){
		$this->db->where('id',$id);
		$this->db->delete('credit');
	}
	function update($id,$data){
		$this->db->where('id',$id);
		$this->db->update('credit',$data);
	}
}
?>