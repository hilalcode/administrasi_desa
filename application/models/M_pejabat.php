<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pejabat extends CI_Model {
	public function tampil() {
		return $this->db->get('pejabat')->row();
	}

	public function pejabat() {
		return $this->db->get('pejabat')->result();
	}

	public function tambah($data)
	{
		
		return $this->db->insert('pejabat', $data);
	}
	public function edit($id) {
		$this->db->where('id_pejabat', $id);
		return $this->db->get('pejabat')->row();
	}

	public function proses_edit($where, $data) {
		$this->db->where($where);
		return $this->db->update('pejabat', $data);
	}
	public function hapus($id_pejabat)
	{
		$this->db->where('id_pejabat', $id_pejabat);
		return $this->db->delete('pejabat');
	}
}
