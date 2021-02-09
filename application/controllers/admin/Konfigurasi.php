<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konfigurasi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('konfigurasi_model');
	}

	// Konfigurasi umum
	public function index()
	{
		$konfigurasi  	=	$this->konfigurasi_model->listing();

		// Validasi Input
		$valid = $this->form_validation;
		
		$valid->set_rules('metatag','Meta tag/judul','required',
				array('required' => '%s harus diisi'));

		if ($valid->run()===FALSE)
		// End
		{
		$data = array('title'	    => 'Konfigurasi umum',
					  'konfigurasi' 	=> $konfigurasi,
					  'isi' 		=> 'admin/konfigurasi/list'
					  );
		$this->load->view('admin/layout/wrapper', $data, FALSE);

		}
		else
		// Data masuk ke database
		{
			$i    = $this->input;

			$data = array('id_konfigurasi'		=> $konfigurasi->id_konfigurasi,
						  'tagline' 			=> $i->post('tagline'),
						  'keywords'	  		=> $i->post('keywords'),
						  'metatag'	  		    => $i->post('metatag'),
						  'deskripsi'	 		=> $i->post('deskripsi'),
                          'background'          => $i->post('background'),
						);
			$this->konfigurasi_model->edit($data);
			$this->session->set_flashdata('sukses','Website telah diupdate');
			redirect(base_url('admin/konfigurasi'),'refresh');
		}
		// End
	}

	// Konfigurasi foto website
	public function foto()
	{
		$konfigurasi 		= $this->konfigurasi_model->listing();
		// Validasi Input
		$valid 			= $this->form_validation;
		
		$valid->set_rules('metatag','Meta tag','required',
				array('required' => '%s harus diisi'));

		if ($valid->run())
		{
			if(!empty($_FILES['foto']['name'])) {
			$config['upload_path'] = './assets/upload/images';
			$config['allowed_types'] = 'jpeg|jpg|png';
			$config['max_size']  = '2500'; // Dalam KiloBytes
			$config['max_width']  = '2024';
			$config['max_height']  = '2024';
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('foto')){

		// End

		$data = array('title' => 'Konfigurasi Foto',
					  'konfigurasi' => $konfigurasi,
					  'error' => $this->upload->display_errors(),
					  'isi' => 'admin/konfigurasi/foto'
					  );
		$this->load->view('admin/layout/wrapper', $data, FALSE);

		}
		else
		// Data masuk ke database
		{
			// Thumbnail gambar
			$upload_gambar = array('upload_data' => $this->upload->data());
			$config['image_library'] = 'gd2';
			$config['source_image'] = './assets/upload/images/'.$upload_gambar['upload_data']['file_name'];
			$config['new_image']	= './assets/upload/images/thumbs/';
			$config['thumb_marker'] = '';
			$config['create_thumb'] = TRUE;
			$config['maintain_ratio'] = TRUE;
			$config['width']         = 75; // Pixel PX
			$config['height']       = 50; // Pixel PX
			$this->load->library('image_lib', $config);
			$this->image_lib->resize();
			// End thumbnail
			$i = $this->input;
			$data = array('id_konfigurasi'	=> $konfigurasi->id_konfigurasi,
						  'metatag' 		=> $i->post('metatag'),
						  'foto' 			=> $upload_gambar['upload_data']['file_name']
						 );
			$this->konfigurasi_model->edit($data);
			$this->session->set_flashdata('sukses','Website telah diupdate');
			redirect(base_url('admin/konfigurasi/foto'),'refresh');
		}}else{
			$i = $this->input;
			$data = array('id_konfigurasi'	=> $konfigurasi->id_konfigurasi,
						  'metatag' 		=> $i->post('metatag'),
						  // 'foto' 			=> $upload_gambar['upload_data']['file_name']
						 );
			$this->konfigurasi_model->edit($data);
			$this->session->set_flashdata('sukses','Website telah diupdate');
			redirect(base_url('admin/konfigurasi/foto'),'refresh');
		}}
		// End
		$data = array('title'   => 'Konfigurasi Foto',
					  'konfigurasi' => $konfigurasi,
					  'isi'     => 'admin/konfigurasi/foto'
					  );
		$this->load->view('admin/layout/wrapper', $data, FALSE);

	}

	// Konfigurasi icon website
	public function icon()
	{
		$konfigurasi 		= $this->konfigurasi_model->listing();
		// Validasi Input
		$valid 			= $this->form_validation;
		
		$valid->set_rules('metatag','Meta tag','required',
				array('required' => '%s harus diisi'));

		if ($valid->run())
		{
			if(!empty($_FILES['icon']['name'])) {
			$config['upload_path'] = './assets/upload/images';
			$config['allowed_types'] = 'jpeg|jpg|png';
			$config['max_size']  = '2500'; // Dalam KiloBytes
			$config['max_width']  = '2024';
			$config['max_height']  = '2024';
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('icon')){

		// End

		$data = array('title' => 'Konfigurasi Icon',
					  'konfigurasi' => $konfigurasi,
					  'error' => $this->upload->display_errors(),
					  'isi' => 'admin/konfigurasi/icon'
					  );
		$this->load->view('admin/layout/wrapper', $data, FALSE);

		}
		else
		// Data masuk ke database
		{
			// Thumbnail gambar
			$upload_gambar = array('upload_data' => $this->upload->data());
			$config['image_library'] = 'gd2';
			$config['source_image'] = './assets/upload/images/'.$upload_gambar['upload_data']['file_name'];
			$config['new_image']	= './assets/upload/images/thumbs/';
			$config['thumb_marker'] = '';
			$config['create_thumb'] = TRUE;
			$config['maintain_ratio'] = TRUE;
			$config['width']         = 75; // Pixel PX
			$config['height']       = 50; // Pixel PX
			$this->load->library('image_lib', $config);
			$this->image_lib->resize();
			// End thumbnail
			$i = $this->input;
			$data = array('id_konfigurasi'	=> $konfigurasi->id_konfigurasi,
						  'metatag' 		=> $i->post('metatag'),
						  'icon' 			=> $upload_gambar['upload_data']['file_name']
						 );
			$this->konfigurasi_model->edit($data);
			$this->session->set_flashdata('sukses','Website telah diupdate');
			redirect(base_url('admin/konfigurasi/icon'),'refresh');
		}}else{
			$i = $this->input;
			$data = array('id_konfigurasi'	=> $konfigurasi->id_konfigurasi,
						  'metatag' 		=> $i->post('metatag'),
						  // 'icon' 			=> $upload_gambar['upload_data']['file_name']
						 );
			$this->konfigurasi_model->edit($data);
			$this->session->set_flashdata('sukses','Website telah diupdate');
			redirect(base_url('admin/konfigurasi/icon'),'refresh');
		}}
		// End
		$data = array('title'   => 'Konfigurasi Icon',
					  'konfigurasi' => $konfigurasi,
					  'isi'     => 'admin/konfigurasi/icon'
					  );
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}
}

/* End of file Konfigurasi.php */
/* Location: ./application/controllers/admin/Konfigurasi.php */