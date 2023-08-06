<?php
defined('BASEPATH') or exit('No direct script access allowed');


class pejabat extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_pejabat');
	}

	public function index()
	{
		$data['title'] = "pejabat - Desa Salu Induk";
		$data['pejabat'] = $this->m_pejabat->pejabat();

		$mutasi = $this->load->view('header', $data);
		$this->load->view('pejabat/tampil_pejabat');
		$this->load->view('footer');
	}
	public function tampil() 
	{
		$data['title'] = "Data Pejabat - Desa Salu Induk";
		$data['pejabat'] = $this->m_pejabat->pejabat();

		$mutasi = $this->load->view('header', $data);
		$this->load->view('pejabat/tampil_pejabat2');
		$this->load->view('footer');
	}
	public function tambah_pejabat()
	{

			$data['title'] = "Tambah Pejabat - Desa Salu Induk";
			// $data['pejabat'] = $this->m_pejabat->tampil();

			$this->load->view('header', $data);
			$this->load->view('pejabat/tambah_pejabat');
			$this->load->view('footer');
		
	}

	public function proses_tambah()
	{
	
			
			$nama_pejabat = $this->input->post('nama_pejabat');
			$nip_pejabat = $this->input->post('nip_pejabat');
			$jabatan_pejabat = $this->input->post('jabatan_pejabat');
			

		$data = array(

			'nama_pejabat' => $this->input->post('nama_pejabat'),
			'nip_pejabat' => $this->input->post('nip_pejabat'),
			'jabatan_pejabat' => $this->input->post('jabatan_pejabat'),
		);
		$this->m_pejabat->tambah($data);
		$this->session->set_flashdata('sukses', 'Data Dengan ID  berhasil ditambahkan.');
		redirect(base_url('pejabat'));
	}

	public function edit()
	{
		$data['title'] = "Edit pejabat - Desa Salu Induk";
		$data['pejabat'] = $this->m_pejabat->edit($this->uri->segment(3));

		$this->load->view('header', $data);
		$this->load->view('pejabat/edit_pejabat');
		$this->load->view('footer');
	}

	public function proses_edit()
	{
		$data = array(
			'nama_pejabat' => $this->input->post('nama'),
			'nip_pejabat' => $this->input->post('nip'),
			'jabatan_pejabat' => $this->input->post('jabatan'),
		);
		$where = array(
			'id_pejabat' => $this->input->post('id'),
		);
		$this->m_pejabat->proses_edit($where, $data);
		$this->session->set_flashdata('sukses', 'Data Dengan ID  berhasil diedit.');
		redirect(base_url('pejabat/'));
	}

	public function hapus($id_pejabat) {
		$this->m_pejabat->hapus($id_pejabat);
		$this->session->set_flashdata('sukses', 'Data Dengan Id ' . $id_pejabat . ' berhasil dihapus.');
		redirect(base_url('pejabat'));
	}

}