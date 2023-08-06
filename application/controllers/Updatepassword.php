<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Updatepassword extends CI_Controller {
	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('login') == FALSE) {
			redirect(base_url("login"));
		}

		$this->load->model('m_login');
	}
    public function tampil() {
		$data['title'] = "Updatepassword- Desa Salu Induk";

		$this->load->view('header', $data);
		$this->load->view('ubahpass/ubahpassword');
		$this->load->view('footer', $data);
	}

	public function update() {
		$data = array(
			'password' => md5($this->input->post('password')),	
		);
		$where = array(
			'username' => $this->session->userdata('username')
		);
		$this->m_login->update($where, $data);
		$this->session->set_flashdata('sukses', 'Password berhasil diubah.');
		redirect(base_url('updatepassword/tampil'));
	}
}
