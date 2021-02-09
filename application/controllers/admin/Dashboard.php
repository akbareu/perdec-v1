<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
class Dashboard extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
        $this->load->model('home_model');
		// Membatasi akses dashboard
		$this->simple_login->cek_login();

	}
	public function index()
	{
        $pesan = $this->home_model->listing();

		$data = array(	'title'	=> 'Pesan masuk',
                        'pesan' => $pesan,
                        'isi'   => 'admin/dashboard/list'
				        );
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

    public function view($id_pesan)
    {
        $view = $this->home_model->detail($id_pesan);
        $pesan = $this->home_model->listing();

		$data = array(	'title'	=> 'Pesan',
                        'pesan' => $pesan,
                        'view'  => $view,
                        'isi'   => 'admin/dashboard/view'
				        );
		$this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    public function delete($id_pesan)
	{
		$data = array('id_pesan' => $id_pesan);
		$this->home_model->delete($data);
		$this->session->set_flashdata('sukses','Pesan telah dihapus');
		redirect(base_url('admin/dashboard'),'refresh');
	}
}

/* End of file Dashboard.php */
/* Location ./application/controllers/admin/Dashboard.php */
