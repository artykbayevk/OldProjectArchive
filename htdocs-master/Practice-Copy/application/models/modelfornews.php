<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Modelfornews extends CI_Model{

	function addnews($data){		
		if($this->db->insert('news',$data)){
			echo"ok";
		}else{
			echo "Sorry";
		}
	}
	function show_grade(){
		$query = $this->db->get('news');
		return $query->result_array();
	}
	function delete($id){
		$this->db->where('id',$id);
		$this->db->delete('news');
	}
	function update($id,$data){
		$this->db->where('id',$id);
		$this->db->update('news',$data);
	}
}
?>