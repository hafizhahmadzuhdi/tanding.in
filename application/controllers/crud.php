<?php 
 
 
class Crud extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('hub_data');
		$this->load->helper('url');
 
	}
 
	function index(){
		$data['player'] = $this->hub_data->ambil_data()->result();
		$this->load->view('player/player_view',$data);
	}
 
	function tambah(){
		$this->load->view('player/playersignup');
	}
 	
	function tambah_aksi(){
		$player_name = $this->input->post('fullname');
		$player_bd = $this->input->post('birthdate');
		$player_usrname = $this->input->post('username');
		$player_email = $this->input->post('email');
		$player_password = $this->input->post('password');
 
		$data = array(
			'player_name' => $player_name,
			'player_bd' => $player_bd,
			'player_usrname' => $player_usrname,
			'player_email' => $player_email,
			'player_password' => $player_password
			);
		$this->hub_data->input_data($data,'player');
		redirect('belajar/index');
	}

	function tambah_aksi_vendor(){
		$field_name = $this->input->post('field_name');
		$vendor_fullname = $this->input->post('vendor_fullname');
		$vendorktp = $this->input->post('vendor_ktp');
		$vendor_username = $this->input->post('vendor_usrname');
		$vendor_password = $this->input->post('vendor_password');
		$field_address = $this->input->post('field_address');
		$field_capacity = $this->input->post('field_capacity');
		$field_price = $this->input->post('field_price');
		$vendor_norek = $this->input->post('vendor_norek');

		$data= array(
			'field_name' => $field_name,
			'vendor_fullname' => $vendor_fullname,
			'vendor_ktp' => $vendorktp,
			'vendor_usrname' => $vendor_username,
			'vendor_password' => $vendor_password,
			'field_address' => $field_address,
			'field_capacity' => $field_capacity,
			'field_price' => $field_price,
			'vendor_norek' => $vendor_norek
		);
		$this->hub_data->input_data($data,'vendor');
		redirect('belajar/index');
}
	}