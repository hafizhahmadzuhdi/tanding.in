 <?php
class player_login_cont extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
 
	}
 
	function index(){
		$this->load->view('player_login');
	}
 
	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'player_usrname' => $username,
			'player_password' => $password
			);
		$cek = $this->m_login->cek_login("player",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 			$this->load->view('player/playerloggedin');
			//redirect(base_url("index.php/player"));
 
		}else{
			echo "Username dan password salah !";
		}
	}

	function aksi_login_vendor(){
		$vendor_username = $this->input->post('vendorusername');
		$vendor_password = $this->input->post('vendorpassword');
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
			echo "Username dan password salah !";
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('index.php/belajar'));
	}
}