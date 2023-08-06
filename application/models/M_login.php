<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model
{
  public function login($data)
	{
		return $this->db->get_where('user',$data);
	}

	public function registrasi()
    {
        $data = [
            "username" => htmlspecialchars($this->input->post('username')),
            "nama_petugas" => htmlspecialchars($this->input->post('nama')),
            "password" => md5($this->input->post('password'))
        ];
        $this->db->insert('user', $data);
    }

    public function update($where, $data)
	{
		$this->db->where($where);
		return $this->db->update('user', $data);
	}
}
