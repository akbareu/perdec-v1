<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		// Validasi
		$this->form_validation->set_rules('username','Username','required',
		array('required' => '%s harus diisi'));
		$this->form_validation->set_rules('password','Password','required',
		array('required' => '%s harus diisi'));

		if($this->form_validation->run())
		{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		// Proses simple_login
		$this->simple_login->login($username,$password);
		}
		// End Validasi

		$data = array( 'title' => 'Login Administrator');
		$this->load->view('login', $data, FALSE);
	}

	// Proses logout
	public function logout()
	{
	$this->simple_login->logout();
	}

}
/* End file of Login.php */
/* Location: ./application/controllers/Login.php */
