<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {

	// Load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('project_model');
		$this->load->model('kategori_model');
		// Membatasi akses dashboard 
		$this->simple_login->cek_login();
	}

	// Data Project
	public function index()
	{
		$project = $this->project_model->listing();
		$data = array('title' => 'Data Project' ,
					  'project' => $project,
                      'isi' => 'admin/project/list'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	// Gambar project
	public function gambar($id_project)
	{
		$project = $this->project_model->detail($id_project);
		$gambar = $this->project_model->gambar($id_project);

		// Validasi Input
		$valid = $this->form_validation;
		
		$valid->set_rules('judul_gambar','Judul/Nama Gambar','required',
				array('required' => '%s harus diisi'));

		if ($valid->run())
		{
			$config['upload_path'] = './assets/upload/images';
			$config['allowed_types'] = 'jpeg|jpg|png';
			$config['max_size']  = '2500'; // Dalam KiloBytes
			$config['max_width']  = '2024';
			$config['max_height']  = '2024';
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('gambar')){

		// End

		$data = array('title' => 'Gambar Project : '.$project->judul_project,
					  'project' => $project,
					  'gambar' => $gambar,
					  'error' => $this->upload->display_errors(),
					  'isi' => 'admin/project/gambar'
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

			$data = array('id_project' 	=> $id_project,
						  'judul_gambar' => $i->post('judul_gambar'),
						  'gambar' 		=> $upload_gambar['upload_data']['file_name']
						 );
			$this->project_model->add_gambar($data);
			$this->session->set_flashdata('sukses','Gambar telah ditambahkan');
			redirect(base_url('admin/project/gambar/'.$id_project),'refresh');
		}}
		// End
		$data = array('title' => 'Gambar project : '.$project->judul_project,
					  'project' => $project,
					  'gambar' => $gambar,
					  'isi' => 'admin/project/gambar'
					  );
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	// Tambah project
	public function add()
	{
		// Ambil data dari kategori
		$kategori = $this->kategori_model->listing();
		// Validasi Input
		$valid = $this->form_validation;
		
		$valid->set_rules('judul_project','Judul project','required',
				array('required' => '%s harus diisi'));

		$valid->set_rules('kode_project','Kode project','required|is_unique[project.kode_project]',
				array('required' => '%s harus diisi',
					  'is_unique'=> '%s sudah ada, Buat kode baru',
					  ));
		if ($valid->run())
		{
			$config['upload_path'] = './assets/upload/images';
			$config['allowed_types'] = 'jpeg|jpg|png';
			$config['max_size']  = '2500'; // Dalam KiloBytes
			$config['max_width']  = '2024';
			$config['max_height']  = '2024';
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('gambar')){

		// End

		$data = array('title' => 'Tambah Project',
					  'kategori' => $kategori,
					  'error' => $this->upload->display_errors(),
					  'isi' => 'admin/project/add'
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
			$slug_project = url_title($this->input->post('judul_project').'-'.$this->input->post('kode_project'), 'dash', TRUE);
			$data = array('id_user' 	=> $this->session->userdata('id_user'),
						  'id_kategori' => $i->post('id_kategori'),
						  'kode_project' => $i->post('kode_project'),
						  'judul_project' => $i->post('judul_project'),
						  'slug_project' => $slug_project,
						  'keterangan'  => $i->post('keterangan'),
						  'gambar' 		=> $upload_gambar['upload_data']['file_name'],
						  'status_project'=> $i->post('status_project'),
						  'tanggal_post' => date('Y-m-d H:i:s')
						);
			$this->project_model->add($data);
			$this->session->set_flashdata('sukses','Project telah ditambahkan');
			redirect(base_url('admin/project'),'refresh');
		}}
		// End
		$data = array('title' => 'Tambah Project',
					  'kategori' => $kategori,
					  'isi' => 'admin/project/add'
					  );
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}
		
// Edit project
	public function edit($id_project)
	{
		$project   		= $this->project_model->detail($id_project);
		$kategori 		= $this->kategori_model->listing();
		// Validasi Input
		$valid 			= $this->form_validation;
		
		$valid->set_rules('judul_project','Judul project','required',
				array('required' => '%s harus diisi'));

		$valid->set_rules('kode_project','Kode project','required',
				array('required' => '%s harus diisi'));
		if ($valid->run())
		{
			if(!empty($_FILES['gambar']['name'])) {
			$config['upload_path'] = './assets/upload/images';
			$config['allowed_types'] = 'jpeg|jpg|png';
			$config['max_size']  = '2500'; // Dalam KiloBytes
			$config['max_width']  = '2024';
			$config['max_height']  = '2024';
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('gambar')){

		// End

		$data = array('title' => 'Edit Project :'.$project->judul_project,
					  'kategori' => $kategori,
					  'project' => $project,
					  'error' => $this->upload->display_errors(),
					  'isi' => 'admin/project/edit'
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
			$slug_project = url_title($this->input->post('judul_project').'-'.$this->input->post('kode_project'), 'dash', TRUE);
			$data = array('id_project'	=> $id_project,
						  'id_user' 	=> $this->session->userdata('id_user'),
						  'id_kategori' => $i->post('id_kategori'),
						  'kode_project' => $i->post('kode_project'),
						  'judul_project' => $i->post('judul_project'),
						  'slug_project' => $slug_project,
						  'keterangan'  => $i->post('keterangan'),
						  'gambar' 		=> $upload_gambar['upload_data']['file_name'],
						  'status_project'=> $i->post('status_project')
						 );
			$this->project_model->edit($data);
			$this->session->set_flashdata('sukses','Project telah diedit');
			redirect(base_url('admin/project'),'refresh');
		}}else{
			// Edit project tanpa ganti gambar
			$i = $this->input;
			$slug_project = url_title($this->input->post('judul_project').'-'.$this->input->post('kode_project'), 'dash', TRUE);
			$data = array('id_project'	=> $id_project,
						  'id_user' 	=> $this->session->userdata('id_user'),
						  'id_kategori' => $i->post('id_kategori'),
						  'kode_project' => $i->post('kode_project'),
						  'judul_project' => $i->post('judul_project'),
						  'slug_project' => $slug_project,
						  'keterangan'  => $i->post('keterangan'),
						  // 'gambar' 		=> $upload_gambar['upload_data']['file_name'],
						  'status_project'=> $i->post('status_project')
						 );
			$this->project_model->edit($data);
			$this->session->set_flashdata('sukses','Project telah diedit');
			redirect(base_url('admin/project'),'refresh');
		}}
		// End
		$data = array('title' => 'Edit Project :'.$project->judul_project,
					  'kategori' => $kategori,
					  'project' => $project,
					  'isi' => 'admin/project/edit'
					  );
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

// Delete project
	public function delete($id_project)
	{
		// Hapus file gambar di upload
		$project = $this->project_model->detail($id_project);
		unlink('./assets/upload/images/'.$project->gambar);
		unlink('./assets/upload/images/thumbs/'.$project->gambar);
		// End
		$data = array('id_project' => $id_project);
		$this->project_model->delete($data);
		$this->session->set_flashdata('sukses','Project telah dihapus');
		redirect(base_url('admin/project'),'refresh');
	}

// Delete gambar 
	public function delete_gambar($id_project,$id_gambar)
	{
		// Hapus file gambar di upload
		$gambar = $this->project_model->detail_gambar($id_gambar);
		unlink('./assets/upload/images/'.$gambar->gambar);
		unlink('./assets/upload/images/thumbs/'.$gambar->gambar);
		// End
		$data = array('id_gambar' => $id_gambar);
		$this->project_model->delete_gambar($data);
		$this->session->set_flashdata('sukses','Gambar telah dihapus');
		redirect(base_url('admin/project/gambar/'.$id_project),'refresh');
	}	
	
}

/* End of file Project.php */
/* Location: ./application/controllers/admin/Project.php */