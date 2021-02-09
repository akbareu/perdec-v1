<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

    // Melihat semua data
	public function listing()
	{
		$this->db->select('*');
		$this->db->from('pesan');
		$this->db->order_by('id_pesan', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

    // Detail
	public function detail($id_pesan)
	{
		$this->db->select('*');
		$this->db->from('pesan');
		$this->db->where('id_pesan', $id_pesan);
		$this->db->order_by('id_pesan', 'desc');
		$query = $this->db->get();
		return $query->row();
	}

    // Tambah
	public function add($data1)
	{
	    $this->db->insert('pesan', $data1);
	}

    // Delete
	public function delete($data)
	{
	$this->db->where('id_pesan', $data['id_pesan']);
	$this->db->delete('pesan', $data);
	}
}
/* End of file Home_model.php */
/* Location: ./application/models/Home_model.php */