<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_pengantar_haji extends CI_Model
{
    public function pejabat()
    {
        return $this->db->query("SELECT * FROM pejabat")->result();
    }
    public function daftar_pengantar_haji()
    {
        $this->db->from('pengantar_haji');
        $this->db->join('penduduk', 'pengantar_haji.nik=penduduk.nik');
        $this->db->join('pejabat', 'pengantar_haji.id_pejabat=pejabat.id_pejabat');
        return $this->db->get()->result();
    }

    public function tambah_pengantar_haji($data)
    {
        return $this->db->insert('pengantar_haji', $data);
    }

    public function edit_pengantar_haji($id)
    {
        $this->db->where('id_pengantar_haji', $id);
        return $this->db->get('pengantar_haji')->row();
    }

    public function proses_edit_pengantar_haji($where, $data)
    {
        $this->db->where($where);
        return $this->db->update('pengantar_haji', $data);
    }

    public function cetak_pengantar_haji($id)
    {
        $this->db->from('pengantar_haji');
        $this->db->where('id_pengantar_haji', $id);
        $this->db->join('penduduk', 'pengantar_haji.nik=penduduk.nik');
        $this->db->join('pejabat', 'pengantar_haji.id_pejabat=pejabat.id_pejabat');
        return $this->db->get()->row();
    }

    public function hapus_pengantar_haji($id)
    {
        $this->db->where('id_pengantar_haji', $id);
        return $this->db->delete('pengantar_haji');
    }
}