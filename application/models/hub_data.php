<?php 
 
class hub_data extends CI_Model{
	function ambil_data(){
		return $this->db->get('player');
	}

	function tampil_data(){
		return $this->db->get('pertandingan');
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function hapus_player($where) {
		$this->db->where('player_usrname', $where);
		$this->db->delete('player');
	}   

	function hapus_vendor($where){
		$this->db->where('vendor_usrname', $where);
		$this->db->delete('vendor');
	}

	function hapus_pertandingan($where){
		$this->db->where('team_name', $where);
		$this->db->delete('pertandingan');
	}

	function getCurrentRow() {
        return $this->db->get('pertandingan')->num_rows();
    }
}
