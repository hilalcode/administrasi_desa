<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_pernikahan extends CI_Model
{
    public function pejabat()
    {
        return $this->db->query("SELECT * FROM pejabat")->result();
    }
    public function daftar_pernikahan()
    {
        $this->db->from('pernikahan');
        $this->db->join('penduduk', 'pernikahan.nik=penduduk.nik');
        $this->db->join('pejabat', 'pernikahan.id_pejabat=pejabat.id_pejabat');
        return $this->db->get()->result();
    }

    public function tambah_pernikahan($data)
    {
        return $this->db->insert('pernikahan', $data);
    }

    public function edit_pernikahan($id)
    {
        $this->db->where('id_pernikahan', $id);
        return $this->db->get('pernikahan')->row();
    }

    public function proses_edit_pernikahan($where, $data)
    {
        $this->db->where($where);
        return $this->db->update('pernikahan', $data);
    }

    public function cetak_pernikahan($id)
    {
        $this->db->from('pernikahan');
        $this->db->where('id_pernikahan', $id);
        $this->db->join('penduduk', 'pernikahan.nik=penduduk.nik');
        $this->db->join('pejabat', 'pernikahan.id_pejabat=pejabat.id_pejabat');
        return $this->db->get()->row();
    }

    public function hapus_pernikahan($id)
    {
        $this->db->where('id_pernikahan', $id);
        return $this->db->delete('pernikahan');
    }
}