
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Session extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
		$this->load->library('session');
	}

	function index()
	{
		$session = $this->session->userdata('login_in');

		if ($session == FALSE) {
			
			$this->load->view('v_login');
			
		} else {
			redirect('welcome/logout', 'refresh');
		}
	}

	function do_login()
	{
		$username = $this->input->post('uname');
		$password = $this->input->post('pass');

		$cek = $this->m_login->count_user($username, $password);

		if ($cek == 1) {

			$user_login = array (
					'login_in' => TRUE,
					'username' => $username);

			$this->session->set_userdata($user_login);
			
		 		redirect('home', 'refresh');
			
		} else {
			redirect('session','refresh');
		}
	}
	
}
