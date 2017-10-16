<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Belajar extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('hub_data');
	}
 
	public function index(){
		$this->load->view('header');
		$this->load->view('body');
		$this->load->view('footer');
	}

	public function admin(){
		$this->load->view('admin/index');
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
 
	function player(){
		$data['player'] = $this->hub_data->ambil_data()->result();
		$this->load->view('/player/player_view',$data);
	}

	function masuk(){
	$this->load->view('header');
	$this->load->view('/player/player_login');
	}


}