<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	// Load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		// Membatasi akses dashboard 
		$this->simple_login->cek_login();
	}

    // Edit user
	public function edit($id_user)
	{
		$user = $this->user_model->detail($id_user);
		// Validasi Input
		$valid = $this->form_validation;
		
		$valid->set_rules('nama','Nama lengkap','required',
				array('required' => '%s harus diisi'));

        $valid->set_rules('profesi','Contoh profesi :','required',
                array('required' => '%s Blogger - Editor - Fotografer'));

		$valid->set_rules('email','Email','valid_email',
				array('valid_email' => '%s tidak valid'));

        $valid->set_rules('instagram','Instagram','valid_url',
				array('valid_url' => '%s tidak valid'));
        
        $valid->set_rules('facebook','Facebook','valid_url',
				array('valid_url' => '%s tidak valid'));

        $valid->set_rules('username','Username','required',
				array('required' => '%s harus diisi'));

        $valid->set_rules('password','Password','required',
				array('required' => '%s harus diisi')); 

		// Validasi Input
		if ($valid->run()===FALSE)
		{
		$data = array('title' => 'Edit User',
					  'user' => $user,
					  'isi' => 'admin/user/edit'
					  );
		$this->load->view('admin/layout/wrapper', $data, FALSE);

		}
		else
		// Data masuk ke database
		{
			$i = $this->input;
			$data = array('id_user' => $id_user,
						  'nama' => $i->post('nama'),
                          'bio' => $i->post('bio'),
                          'profesi' => $i->post('profesi'),
						  'email' => $i->post('email'),
                          'instagram' => $i->post('instagram'),
                          'facebook' => $i->post('facebook'),
                          'github' => $i->post('github'),
                          'alamat' => $i->post('alamat'),
						  'username' => $i->post('username'),
						  'password' => SHA1($i->post('password')),
						  'akses_level' => $i->post('akses_level')
						);
			$this->user_model->edit($data);
			$this->session->set_flashdata('sukses','User telah diedit');
			redirect(base_url('admin/dashboard'),'refresh');
		}
		// Data masuk ke database 
	}

}
/* End of file User.php */
/* Location: ./application/controllers/admin/User.php */