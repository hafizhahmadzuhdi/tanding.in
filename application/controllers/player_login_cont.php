 <?php
class player_login_cont extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
 
	}
 
 
	function aksi_login(){
		$player_usrname = $this->input->post('username');
		$player_password = sha1($this->input->post('password'));
		$where = array(
			'player_usrname' => $player_usrname,
			'player_password' => $player_password
			);
		$cek = $this->m_login->cek_login("player",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $player_usrname,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 			redirect(base_url("index.php/player_login_cont/tolamanplayer"));}else{  echo '<script language="javascript">';
			echo 'alert("Login Gagal");';
			echo 'window.history.go(-1);';
			echo '</script>';
		}
	}

	function aksi_login_vendor(){
		$vendor_username = $this->input->post('vendorusername');
		$vendor_password = sha1($this->input->post('vendorpassword'));
		$where = array(
			'vendor_usrname' => $vendor_username,
			'vendor_password' => $vendor_password
			);
		$cek = $this->m_login->cek_login("vendor",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $vendor_username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 			$this->load->view('vendor/vendorloggedin');
			//redirect(base_url("index.php/player"));
 
		}else{
			echo '<script language="javascript">';
			echo 'alert("Login Gagal");';
			echo 'window.history.go(-1);';
			echo '</script>';
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('index.php/belajar'));}

	function tolamanplayer(){
		$this->load->view('header2');
		$this->load->view('player/playerloggedin');
		//$this->load->view('footer');
	}
}