<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class akun_test extends TestCase{
    
    protected $backupGlobalsBlacklist = array( '_SESSION' );
    
        public function setUp(){
        if ( isset( $_SESSION ) ) $_SESSION = array( );
        $this->resetInstance();
        $this->CI->load->model('m_login');
        $this->CI->load->model('hub_data');
        $this->obj = $this->CI->m_login;
        $this->obj1 = $this->CI->hub_data;
        }
        
        public function test_index(){
		$output = $this->request('GET', 'belajar/index');
		$this->assertContains('<title>Tanding.in</title>', $output);
		}
        
        public function test_userlogin (){
		$output = $this->request('GET', 'belajar/masuk');
		$this->assertContains('<h1> Login as Player </h1>', $output);
		}
    
        public function test_masukRegister(){
		$output = $this->request('GET', 'belajar/daftar');
		$this->assertContains('<title>Tanding.in</title>', $output);
		}
                
        public function test_masukRegisterVendor(){
                $output = $this->request('GET', 'belajar/daftar_vendor');
		$this->assertContains('<title>Tanding.in</title>', $output);
		}
        
        public function test_playerlogin(){
            $_SESSION['nama'] = "pujihuda";
            $_SESSION['status'] = "login";
            
            $output = $this->request(
    		'POST',
    		['player_login_cont', 'aksi_login'],
    		['username' => 'pujihuda',
		'password' => 'puji123',
		]
    		);
            $this->assertEquals('pujihuda', $_SESSION['nama']);
    }
    
    public function test_playerlogin_gagal1(){
		//$this->assertFalse( isset($_SESSION['customer']) );
		$output = $this->request(
			'POST',
			'player_login_cont/aksi_login',
				[
					'player_usrname' => 'arifhidayat',
					'player_password' => '',
				]
		);
		$this->assertContains('"Login Gagal"', $output);
		}
    	    
    public function test_playerlogin_gagal2(){
		//$this->assertFalse( isset($_SESSION['customer']) );
		$output = $this->request(
			'POST',
			'player_login_cont/aksi_login',
				[
					'player_usrname' => '',
					'player_password' => 'arifentap',
				]
		);
		$this->assertContains('"Login Gagal"', $output);
		}
                
    public function test_playerlogin_gagal3(){
        $output = $this->request(
			'POST',
			'player_login_cont/aksi_login',
				[
					'player_usrname' => '',
					'player_password' => '',
				]
		);
		$this->assertContains('"Login Gagal"', $output);
    }
    
    public function test_playerlogin_gagal4(){
		//$this->assertFalse( isset($_SESSION['customer']) );
		$output = $this->request(
			'POST',
			'player_login_cont/aksi_login',
				[
					'player_usrname' => 'INDRA',
					'player_password' => '1234',
				]
		);
		$this->assertContains('"Login Gagal"', $output);
		}
                
     public function test_vendorlogin(){
            $_SESSION['nama'] = "abifirdaus";
            $_SESSION['status'] = "login";
            
            $output = $this->request(
    		'POST',
    		['player_login_cont', 'aksi_login_vendor'],
    		['vendorusername' => 'abifirdaus',
		'vendorpassword' => 'abifirdaus123',
		]
    		);	
        $this->assertEquals('abifirdaus', $_SESSION['nama']);
      
    }
    
    public function test_vendorlogin_gagal1(){
		//$this->assertFalse( isset($_SESSION['customer']) );
		$output = $this->request(
			'POST',
			'player_login_cont/aksi_login_vendor',
				[
					'vendor_usrname' => 'scudetofutsal',
					'vendor_password' => '',
				]
		);
		$this->assertContains('"Login Gagal"', $output);
		}
                
    public function test_vendorlogin_gagal2(){
		//$this->assertFalse( isset($_SESSION['customer']) );
		$output = $this->request(
			'POST',
			'player_login_cont/aksi_login_vendor',
				[
					'vendor_usrname' => '',
					'vendor_password' => 'scudetofutsal123',
				]
		);
		$this->assertContains('"Login Gagal"', $output);
		}
                
    public function test_vendorlogin_gagal3(){
		//$this->assertFalse( isset($_SESSION['customer']) );
		$output = $this->request(
			'POST',
			'player_login_cont/aksi_login_vendor',
				[
					'vendor_usrname' => '',
					'vendor_password' => '',
				]
		);
		$this->assertContains('"Login Gagal"', $output);
		}
                
    public function test_vendorlogin_gagal4(){
		//$this->assertFalse( isset($_SESSION['customer']) );
		$output = $this->request(
			'POST',
			'player_login_cont/aksi_login_vendor',
				[
					'vendor_usrname' => 'scudetoku',
					'vendor_password' => 'scudetokujuga',
				]
		);
		$this->assertContains('"Login Gagal"', $output);
		}
                
    public function test_validationUser_success(){
		//$this->assertFalse( isset($_SESSION['customer']) );
		
                $output = $this->request('POST',
                        ['belajar', 'formvalidasi_player'],
                        [ 'fullname' => 'testing', 'birthdate' => '1997-09-09', 'username' => 'testing', 'email' => 'test@gmail.com', 'password' => 'testing123']
		);
		//$this->assertRedirect(base_url('index.php/belajar/tambah_aksi'));
                //$this->assertContains('<title>Tanding.in</title>',$output);
                $where = 'testing';
                $this->obj1->hapus_player($where);
                $this->assertRedirect('belajar/index');
                
		}
                
    public function test_validationUser_gagal(){
		//$this->assertFalse( isset($_SESSION['customer']) );
		
                $output = $this->request('POST',
                        ['belajar', 'formvalidasi_player'],
                        [ 'fullname' => '', 'birthdate' => '', 'username' => '', 'email' => '', 'password' => '']
		);
		//$this->assertRedirect(base_url('index.php/belajar/tambah_aksi'));
                //$this->assertContains('<title>Tanding.in</title>',$output);
                $this->assertContains('<title>Tanding.in</title>',$output);
                
		}
    
    public function test_validationVendor_success(){
		//$this->assertFalse( isset($_SESSION['customer']) );
		$output = $this->request(
			'POST',
			'belajar/formvalidasi_vendor',
				[
					
                        'field_name' => 'FutsalKu',
			'vendor_fullname' => 'Ahsanul',
			'vendor_ktp' => '3216060909970011',
			'vendor_usrname' => 'futsalku',
			'vendor_password' => 'futsalku',
			'field_address' => 'Jl. Barata Jaya 2 no.29',
			'field_capacity' => '4',
			'field_price' => '75000',
			'vendor_norek' => '5215100024'
				]
		);
                
                //$this->assertContains('<title>Tanding.in</title>',$output);
                $where = 'futsalku';
                $this->obj1->hapus_vendor($where);
                $this->assertRedirect('belajar/index');
		}
                
    public function test_validationVendor_gagal(){
		//$this->assertFalse( isset($_SESSION['customer']) );
		
                $output = $this->request(
			'POST',
			'belajar/formvalidasi_vendor',
				[
					
                        'field_name' => '',
			'vendor_fullname' => '',
			'vendor_ktp' => '',
			'vendor_usrname' => '',
			'vendor_password' => '',
			'field_address' => '',
			'field_capacity' => '',
			'field_price' => '',
			'vendor_norek' => '']
		);
		//$this->assertRedirect(base_url('index.php/belajar/tambah_aksi'));
                //$this->assertContains('<title>Tanding.in</title>',$output);
                $this->assertContains('<title>Tanding.in</title>',$output);
                
		}
                
    public function test_logout(){
        $output = $this->request('GET', 'player_login_cont/logout');
    	$_SESSION['nama'] = "arifhidayat";
        $_SESSION['status'] = "login";
        $this->assertRedirect(base_url('index.php/belajar'));}
        
         public function test_validationTantangan_success(){
		//$this->assertFalse( isset($_SESSION['customer']) );
                $_SESSION['nama'] = 'arifhidayat';
                $_SESSION['status'] = 'login';
		$output = $this->request(
			'POST',
			'belajar/formvalidasi_tantangan',
				[
					
                        'team_name' => 'BatikTest',
			'player_id' => '6',
			'average_age' => '20',
			'date' => '1997-06-27',
			'time' => '00:00:00',
                        'duration' => '2',
                        'field' => 'fiva',
                        'notes' => 'asd',
				]
		);
                
                $where = 'BatikTest';
                $this->obj1->hapus_pertandingan($where);
                $this->assertRedirect('player_login_cont/tolamanplayer');
		}
                
                public function test_validationTantangan_gagal(){
		//$this->assertFalse( isset($_SESSION['customer']) );
                $_SESSION['nama'] = 'arifhidayat';
                $_SESSION['status'] = 'login';
		$output = $this->request(
			'POST',
			'belajar/formvalidasi_tantangan',
				[
					
                        'team_name' => '',
			'player_id' => '',
			'average_age' => '',
			'date' => '',
			'time' => '',
                        'duration' => '',
                        'field' => '',
                        'notes' => '',
				]
		);
                
                $this->assertContains('<title>Tanding.in</title>',$output);
		}
        
        
    public function testCreateTantangan(){		
		$mula = $this->obj1->getCurrentRow();
		$output = $this->request(
			'POST',
			['belajar', 'tambah_tantangan'],
			[
			'team_name' => 'Batik Test',
			'player_id' => '6',
			'average_age' => '20',
			'date' => '1997-06-27',
			'time' => '00:00:00',
                        'duration' => '2',
                        'field' => 'fiva',
                        'notes' => 'asd',
			]
			);
		$akhir = $this->obj1->getCurrentRow();
        $expected = $akhir - $mula;
        $this->assertEquals(1, $expected);   
	}
        
        public function testLihatTantangan(){
            $_SESSION['nama'] = "arifhidayat";
            $_SESSION['status'] = "login";
            $output = $this->request('GET', 'belajar/pertandingan');
            $this->assertContains('<title>Tanding.in</title>', $output);
            
                    
        }
        
        public function testCreateTantanganGagal(){		
		$mula = $this->obj1->getCurrentRow();
		$output = $this->request(
			'POST',
			['belajar', 'tambah_tantangan'],
			[
			'team_name' => '',
			'player_id' => '6',
			'average_age' => '20',
			'date' => '1997-06-27',
			'time' => '00:00:00',
                        'duration' => '2',
                        'field' => 'fiva',
                        'notes' => 'asd',
			]
			);
		$akhir = $this->obj1->getCurrentRow();
        $expected = $akhir - $mula;
        $this->assertEquals(1, $expected);   
	}
        
        function test_read_tantangan(){ 
                $_SESSION['nama'] = "arifhidayat";
                $_SESSION['status'] = "login";
		$output = $this->request('GET', 'belajar/pertandingan');
                $this->assertContains('<title>Tanding.in</title>', $output);}
                
        function testLamanPlayer(){
                $_SESSION['nama'] = "arifhidayat";
                $_SESSION['status'] = "login";
                $output = $this->request('GET', 'player_login_cont/tolamanplayer');
                $this->assertContains('<title>Tanding.in</title>', $output);
        }
                
    public function test_method_404()
	{
		$this->request('GET', 'welcome/method_not_exist');
		$this->assertResponseCode(404);
	}
        
        public function test_APPPATH()
	{
		$actual = realpath(APPPATH);
		$expected = realpath(__DIR__ . '/../..');
		$this->assertEquals(
			$expected,
			$actual,
			'Your APPPATH seems to be wrong. Check your $application_folder in tests/Bootstrap.php'
		);
	}
                
                
                
                
        }
        
        
    
