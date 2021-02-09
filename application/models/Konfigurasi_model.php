<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konfigurasi_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// Listing

	public function listing()
	{
		$query	=	$this->db->get('konfigurasi');
		return  $query->row();
	}

	public function edit($data)
	{
		$this->db->where('id_konfigurasi', $data['id_konfigurasi']);
		$this->db->update('konfigurasi', $data);
	}

	public function kat_project()
	{
		$this->db->select('project.*,
						   kategori.nama_kategori,
						   kategori.slug_kategori'
						 );
		$this->db->from('project');
		// Structure gabung
		$this->db->join('kategori', 'kategori.id_kategori = project.id_kategori', 'left');
		// End Structure gabung
		$this->db->group_by('project.id_kategori');
		$this->db->order_by('kategori.urutan', 'asc');
		$query = $this->db->get();
		return $query->result();
	}
}

/* End of file Konfigurasi_model.php */
/* Location: ./application/models/Konfigurasi_model.php */