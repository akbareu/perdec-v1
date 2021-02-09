<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// Melihat semua project
	public function listing()
	{
		$this->db->select('project.*,
						   users.nama,
						   kategori.nama_kategori,
						   kategori.slug_kategori,
						   COUNT(gambar.id_gambar) AS total_gambar');
		$this->db->from('project');
		// Structure gabung
		$this->db->join('users', 'users.id_user = project.id_project', 'left');
		$this->db->join('kategori', 'kategori.id_kategori = project.id_kategori', 'left');
		$this->db->join('gambar', 'gambar.id_project = project.id_project', 'left');
		// End Structure gabung
		$this->db->group_by('project.id_project');
		$this->db->order_by('id_project', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	// Melihat project di home
	public function home()
	{
		$this->db->select('project.*,
						   users.nama,
						   kategori.nama_kategori,
						   kategori.slug_kategori,
						   COUNT(gambar.id_gambar) AS total_gambar');
		$this->db->from('project');
		// Structure gabung
		$this->db->join('users', 'users.id_user = project.id_project', 'left');
		$this->db->join('kategori', 'kategori.id_kategori = project.id_kategori', 'left');
		$this->db->join('gambar', 'gambar.id_project = project.id_project', 'left');
		// End Structure gabung
		$this->db->where('project.status_project', 'Ready');
		$this->db->group_by('project.id_project');
		$this->db->order_by('id_project', 'desc');
		$this->db->limit(12);
		$query = $this->db->get();
		return $query->result();
	}

	public function home_new()
	{
		$this->db->select('project.*,
						   users.nama,
						   kategori.nama_kategori,
						   kategori.slug_kategori,
						   COUNT(gambar.id_gambar) AS total_gambar');
		$this->db->from('project');
		// Structure gabung
		$this->db->join('users', 'users.id_user = project.id_project', 'left');
		$this->db->join('kategori', 'kategori.id_kategori = project.id_kategori', 'left');
		$this->db->join('gambar', 'gambar.id_project = project.id_project', 'left');
		// End Structure gabung
		$this->db->where('project.status_project', 'Ready');
		$this->db->group_by('project.id_project');
		$this->db->order_by('id_project', 'desc');
		$this->db->limit(6);
		$query = $this->db->get();
		return $query->result();
	}

	// Detail project
	public function read($slug_project)
	{
		$this->db->select('project.*,
						   users.nama,
						   kategori.nama_kategori,
						   kategori.slug_kategori,
						   COUNT(gambar.id_gambar) AS total_gambar');
		$this->db->from('project');
		// Structure gabung
		$this->db->join('users', 'users.id_user = project.id_project', 'left');
		$this->db->join('kategori', 'kategori.id_kategori = project.id_kategori', 'left');
		$this->db->join('gambar', 'gambar.id_project = project.id_project', 'left');
		// End Structure gabung
		$this->db->where('project.status_project', 'Ready');
		$this->db->where('project.slug_project', $slug_project);
		$this->db->group_by('project.id_project');
		$this->db->order_by('id_project', 'desc');
		$query = $this->db->get();
		return $query->row();
	}

	// Melihat semua project
	public function project($limit,$start)
	{
		$this->db->select('project.*,
						   users.nama,
						   kategori.nama_kategori,
						   kategori.slug_kategori,
						   COUNT(gambar.id_gambar) AS total_gambar');
		$this->db->from('project');
		// Structure gabung
		$this->db->join('users', 'users.id_user = project.id_project', 'left');
		$this->db->join('kategori', 'kategori.id_kategori = project.id_kategori', 'left');
		$this->db->join('gambar', 'gambar.id_project = project.id_project', 'left');
		// End Structure gabung
		$this->db->where('project.status_project', 'Ready');
		$this->db->group_by('project.id_project');
		$this->db->order_by('id_project', 'desc');
		$this->db->limit($limit,$start);
		$query = $this->db->get();
		return $query->result();
	}

	// Total project
	public function total_project()
	{
		$this->db->select('COUNT(*) AS total');
		$this->db->from('project');
		$this->db->where('status_project', 'Ready');
		$query = $this->db->get();
		return $query->row();
	}

	// Melihat kategori
	public function kategori($id_kategori,$limit,$start)
	{
		$this->db->select('project.*,
						   users.nama,
						   kategori.nama_kategori,
						   kategori.slug_kategori,
						   COUNT(gambar.id_gambar) AS total_gambar');
		$this->db->from('project');
		// Structure gabung
		$this->db->join('users', 'users.id_user = project.id_project', 'left');
		$this->db->join('kategori', 'kategori.id_kategori = project.id_kategori', 'left');
		$this->db->join('gambar', 'gambar.id_project = project.id_project', 'left');
		// End Structure gabung
		$this->db->where('project.status_project', 'Ready');
		$this->db->where('project.id_kategori', $id_kategori);
		$this->db->group_by('project.id_project');
		$this->db->order_by('id_project', 'desc');
		$this->db->limit($limit,$start);
		$query = $this->db->get();
		return $query->result();
	}

	// Total kategori
	public function total_kategori($id_kategori)
	{
		$this->db->select('COUNT(*) AS total');
		$this->db->from('project');
		$this->db->where('status_project', 'Ready');
		$this->db->where('id_kategori', $id_kategori);
		$query = $this->db->get();
		return $query->row();
	}

	// Detail
	public function detail($id_project)
	{
		$this->db->select('*');
		$this->db->from('project');
		$this->db->where('id_project', $id_project);
		$this->db->order_by('id_project', 'desc');
		$query = $this->db->get();
		return $query->row();
	}

	// Detail gambar
	public function detail_gambar($id_gambar)
	{
		$this->db->select('*');
		$this->db->from('gambar');
		$this->db->where('id_gambar', $id_gambar);
		$this->db->order_by('id_gambar', 'desc');
		$query = $this->db->get();
		return $query->row();
	}

	// Gambar
	public function gambar($id_project)
	{
		$this->db->select('*');
		$this->db->from('gambar');
		$this->db->where('id_project', $id_project);
		$this->db->order_by('id_gambar', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	// Tambah
	public function add($data)
	{
	$this->db->insert('project', $data);
	}

	// Tambah Gambar
	public function add_gambar($data)
	{
	$this->db->insert('gambar', $data);
	}


	// Edit
	public function edit($data)
	{
	$this->db->where('id_project', $data['id_project']);
	$this->db->update('project', $data);
	}

	// Delete
	public function delete($data)
	{
	$this->db->where('id_project', $data['id_project']);
	$this->db->delete('project', $data);
	}

	// Delete gambar
	public function delete_gambar($data)
	{
	$this->db->where('id_gambar', $data['id_gambar']);
	$this->db->delete('gambar', $data);
	}

}

/* End of file Project_model.php */
/* Location: ./application/models/Project_model.php */