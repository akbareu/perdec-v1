<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('project_model');
		$this->load->model('kategori_model');
        $this->load->model('konfigurasi_model');
        $this->load->model('user_model');
        $this->load->model('home_model');
    }

	public function index()
	{   
        $background = $this->konfigurasi_model->listing();
        $site   = $this->konfigurasi_model->listing();
        $author = $this->user_model->listing1();
        $kategori = $this->konfigurasi_model->kat_project();
        $project = $this->project_model->home();
		$project1 = $this->project_model->home_new();
        $project2 = $this->project_model->home_new();

		$data = array(  'title' => 'Home | Akbar',
                        'site'  => $site,
                        'background' => $background, 
                        'author' => $author,                       
                        'keywords'  => $site->keywords,
                        'deskripsi' => $site->deskripsi,
                        'project' => $project,
                        'project1' => $project1,
                        'project2' => $project2,
                        'kategori' => $kategori,
				     );
        $this->load->view('home/wrapper', $data, FALSE);
                     
        // Validasi Input
		$valid = $this->form_validation;
		
		$valid->set_rules('nama','Nama lengkap','required',
				array('required' => '%s harus diisi'));

		$valid->set_rules('email','Email','required|valid_email',
				array('required' => '%s harus diisi',
					  'valid_email' => '%s tidak valid.'));

		$valid->set_rules('no_hp','No HP/WA','required',
				array('required' => '%s harus diisi'));

		$valid->set_rules('pesan','Pesan','required|min_length[6]',
				array('required' => '%s harus diisi',
					  'min_length' => '%s minimal 6 karakter'));
            
        if ($valid->run()===FALSE)
		{
		$data = array(  'title' => 'Home | Akbar',
                        'site'  => $site,
                        'background' => $background, 
                        'author' => $author,                       
                        'keywords'  => $site->keywords,
                        'deskripsi' => $site->deskripsi,
                        'project' => $project,
                        'project1' => $project1,
                        'project2' => $project2,
                        'kategori' => $kategori,
				     );
		$this->load->view('home/wrapper', $data, FALSE);

		}
		else
		// Data masuk ke database
		{
			$i = $this->input;
			$data1 = array('nama' => $i->post('nama'),
						   'email' => $i->post('email'),
						   'no_hp' => $i->post('no_hp'),
						   'pesan' => $i->post('pesan'),
                           'tanggal_kirim' => date('Y:m:d H:i:s')
						);
            $this->home_model->add($data1);
		    $this->load->view('home/wrapper', $data1, FALSE);
            redirect(base_url(),'refresh');
        }
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */