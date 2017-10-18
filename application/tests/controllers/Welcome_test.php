<?php
/**
 * Part of ci-phpunit-test
 *
 * @author     Kenji Suzuki <https://github.com/kenjis>
 * @license    MIT License
 * @copyright  2015 Kenji Suzuki
 * @link       https://github.com/kenjis/ci-phpunit-test
 */

class Welcome_test extends TestCase
{
    public function setUp(){
        if ( isset( $_SESSION ) ) $_SESSION = array( );
        $this->resetInstance();
        $this->CI->load->model('m_login');
        $this->CI->load->model('hub_data');
        $this->obj = $this->CI->m_login;
        $this->obj1 = $this->CI->hub_data;
        }
    
    public function test_index()
	{
		$output = $this->request('GET', 'welcome/index');
		$this->assertContains('<title>Welcome to CodeIgniter</title>', $output);
	}

	public function test_method_404()
	{
		$this->request('GET', 'welcome/method_not_exist');
		$this->assertResponseCode(404);
	}
        
        
        
//        public function test_index_not_login()
//        {
//        $output = $this->request('GET', 'player_login_cont');
//        $this->assertRedirect('player_login_cont/aksi_login');
//        }

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
