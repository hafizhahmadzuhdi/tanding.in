<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Belajar extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('hub_data');
		$this->load->library('form_validation');
	}
 
	public function index(){
		$this->load->view('header');
		$this->load->view('body');
		$this->load->view('footer');
	}

	public function daftar(){
		$this->load->view('header');
		$this->load->view('player/playersignup');
		$this->load->view('footer');
	}

	public function daftar_vendor(){
		$this->load->view('header');
		$this->load->view('vendor/vendorsignup');
		$this->load->view('footer');
	}
 

	function masuk(){
	$this->load->view('header');
	$this->load->view('/player/player_login');
	}

	function post_tantangan(){
		$data['player'] = $this->hub_data->ambil_data()->result();
		$this->load->view('header2');$this->load->view('player/player_tantangan');$this->load->view('footer');}

	public function pertandingan(){
		$data['pertandingan'] = $this->hub_data->tampil_data()->result();
		$this->load->view('header2');
		$this->load->view('player/player_cari_lawan',$data);
		$this->load->view('footer');	
	}

	//VALIDASI PLAYER
	function formvalidasi_player(){
		$this->form_validation->set_rules('fullname','Full name','required');
		$this->form_validation->set_rules('birthdate','Birthdate','required');
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('password','Password','required');

	
		if($this->form_validation->run() != false){
			//$this->tolamandaftarplayer();
			$this->tambah_aksi();}else{
			$this->load->view('header');
			$this->load->view('player/playersignup');
			$this->load->view('footer');
		}
	}
	//VALIDASI VENDOR
	function formvalidasi_vendor(){
		$this->form_validation->set_rules('field_name','Field name','required');
		$this->form_validation->set_rules('vendor_fullname','Vendor Name','required');
		$this->form_validation->set_rules('vendor_ktp','KTP','required');
		$this->form_validation->set_rules('vendor_usrname','Vendor Username','required');
		$this->form_validation->set_rules('vendor_password','Vendor Password','required');
		$this->form_validation->set_rules('field_address','Field Address','required');
		$this->form_validation->set_rules('field_capacity','Field Capacity','required');
		$this->form_validation->set_rules('field_price','Field Price','required');
		$this->form_validation->set_rules('vendor_norek','Nomor Rekening','required');

	
		if($this->form_validation->run() != false){
			//$this->tolamandaftarplayer();
			$this->tambah_aksi_vendor();}else{
			$this->load->view('header');
			$this->load->view('vendor/vendorsignup');
			$this->load->view('footer');
			
			}
		}


	function formvalidasi_tantangan(){
		$this->form_validation->set_rules('team_name','Team Name','required');
		$this->form_validation->set_rules('player_id','player_id','required');
		$this->form_validation->set_rules('average_age','Average age','required');
		$this->form_validation->set_rules('date','Date','required');
		$this->form_validation->set_rules('time','Time','required');
		$this->form_validation->set_rules('duration','Duration','required');
		$this->form_validation->set_rules('field','Field','required');
		
	
		if($this->form_validation->run() != false){
			//$this->tolamandaftarplayer();
			$this->tambah_tantangan();}else{
			$this->load->view('header');
			$this->load->view('player/player_tantangan');
			$this->load->view('footer');
		}	
	}


	//Sign Up player
	function tambah_aksi(){
		$player_name = $this->input->post('fullname');
		$player_bd = $this->input->post('birthdate');
		$player_usrname = $this->input->post('username');
		$player_email = $this->input->post('email');
		$player_password = sha1($this->input->post('password'));
 
		$data = array(
			'player_name' => $player_name,
			'player_bd' => $player_bd,
			'player_usrname' => $player_usrname,
			'player_email' => $player_email,
			'player_password' => $player_password
			);
		$this->hub_data->input_data($data,'player');
		redirect('belajar/index');}

	//sign up vendor
	function tambah_aksi_vendor(){
		$field_name = $this->input->post('field_name');
		$vendor_fullname = $this->input->post('vendor_fullname');
		$vendorktp = $this->input->post('vendor_ktp');
		$vendor_username = $this->input->post('vendor_usrname');
		$vendor_password = sha1($this->input->post('vendor_password'));
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
		redirect('belajar/index');}

	//signup tantangan
	function tambah_tantangan(){
		$team_name = $this->input->post('team_name');
		$player_id = $this->input->post('player_id');
		$average_age = $this->input->post('average_age');
		$date = $this->input->post('date');
		$time = $this->input->post('time');
		$duration = $this->input->post('duration');
		$field = $this->input->post('field');
		$notes = $this->input->post('notes');

		$data= array(
			'team_name' => $team_name,
			'player_id' => $player_id,
			'average_age' => $average_age,
			'date' => $date,
			'time' => $time,
			'duration' => $duration,
			'field' => $field,
			'notes' => $notes
		);
		$this->hub_data->input_data($data,'pertandingan');
		redirect('player_login_cont/tolamanplayer');}
}