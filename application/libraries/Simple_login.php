<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Simple_login
{
	protected $CI;

	public function __construct()
	{
        $this->CI =& get_instance();
	}

	// Fungsi login
	public function login($username,$password)
	{
		$check = $this->CI->user_model->login($username,$password);
	    // Jika berhasil login , maka session dibuat
		if($check)
		{
			$id_user = $check->id_user;
			$nama	 = $check->nama;
			$akses_level = $check->akses_level;
		// Create session + Redirect ke dashboard
		$this->CI->session->set_userdata('id_user',$id_user);
		$this->CI->session->set_userdata('nama',$nama);
		$this->CI->session->set_userdata('username',$username);
		$this->CI->session->set_userdata('akses_level',$akses_level);
		redirect(base_url('admin/dashboard'),'refresh');
		}else{
		//  Jika gagal login , maka harus login
		$this->CI->session->set_flashdata('danger', 'Username atau Password anda salah');
		redirect(base_url('login'),'refresh');
		}
	}

	// Fungsi cek login
	public function cek_login()
	{
		// Memeriksa session sudah didapat, jika belum redirect ke login
		if($this->CI->session->userdata('username') == "")
		{
		   $this->CI->session->set_flashdata('warning','Login untuk lanjut ke panel admin');
		   redirect(base_url('login'),'refresh');
		}
	}

	// Fungsi logout
	public function logout()
	{
		// Membuang session login + Redirect ke login
		$this->CI->session->unset_userdata('id_user');
		$this->CI->session->unset_userdata('nama');
		$this->CI->session->unset_userdata('username');
		$this->CI->session->unset_userdata('akses_level'); 
		$this->CI->session->set_flashdata('info','Anda berhasil logout');
		redirect(base_url('login'),'refresh');
	}

}

/* End of file Simple_login.php */
/* Location: ./application/libraries/Simple_login.php */
