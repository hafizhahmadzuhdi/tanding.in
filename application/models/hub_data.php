<?php 
 
class hub_data extends CI_Model{
	function ambil_data(){
		return $this->db->get('player');
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

}
