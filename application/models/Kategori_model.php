<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// Melihat semua data
	public function listing()
	{
		$this->db->select('*');
		$this->db->from('kategori');
		$this->db->order_by('id_kategori', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	// Detail
	public function detail($id_kategori)
	{
		$this->db->select('*');
		$this->db->from('kategori');
		$this->db->where('id_kategori', $id_kategori);
		$this->db->order_by('id_kategori', 'desc');
		$query = $this->db->get();
		return $query->row();
	}

	// Read
	public function read($slug_kategori)
	{
		$this->db->select('*');
		$this->db->from('kategori');
		$this->db->where('slug_kategori', $slug_kategori);
		$this->db->order_by('id_kategori', 'desc');
		$query = $this->db->get();
		return $query->row();
	}

	// Login
	public function login($kategoriname,$password)
	{
		$this->db->select('*');
		$this->db->from('kategori');
		$this->db->where( array('kategoriname' => $kategoriname,
								'password' => SHA1($password)));
		$this->db->order_by('id_kategori', 'desc');
		$query = $this->db->get();
		return $query->row();
	}

	// Tambah
	public function add($data)
	{
	$this->db->insert('kategori', $data);
	}

	// Edit
	public function edit($data)
	{
	$this->db->where('id_kategori', $data['id_kategori']);
	$this->db->update('kategori', $data);
	}

	// Delete
	public function delete($data)
	{
	$this->db->where('id_kategori', $data['id_kategori']);
	$this->db->delete('kategori', $data);
	}
}

/* End of file Kategori_model.php */
/* Location: ./application/models/Kategori_model.php */