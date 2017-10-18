<?php
class crud extends TestCase{
    public function setUp(){
        if ( isset( $_SESSION ) ) $_SESSION = array( );
        $this->resetInstance();
        $this->CI->load->model('m_login');
        $this->CI->load->model('hub_data');
        $this->obj = $this->CI->m_login;
        $this->obj1 = $this->CI->hub_data;
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