<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surat extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('login') == FALSE) {
			redirect(base_url("login"));
		}
		$this->load->model('m_pernikahan');
		$this->load->model('m_surat_pindah');
		$this->load->model('m_pengantar_haji');
		$this->load->model('m_usaha');
		$this->load->model('m_sktm_pendidikan');
		$this->load->model('m_sktm_kesehatan');
		$this->load->model('m_surat_kelahiran');
		$this->load->model('m_surat_kematian');
		$this->load->model('m_penduduk');
	}
	public function pindah()
	{
		if ($this->uri->segment('3') == "tambah") {
			if ($this->input->post('tambah_pindah')) {
				$data = array(
					'nik_kepala_keluarga' => $this->input->post('nik_kepala'),
					'nik_pemohon' => $this->input->post('nik_pemohon'),
					'alasan_pindah' => $this->input->post('alasan'),
					'alamat_pindah' => $this->input->post('alamat'),
					'tanggal_pindah' => date('Y-m-d'),
					'rt_pindah' => $this->input->post('rt'),
					'rw_pindah' => $this->input->post('rw'),
					'dusun_pindah' => $this->input->post('dusun'),
					'desa_pindah' => $this->input->post('desa'),
					'kecamatan_pindah' => $this->input->post('kecamatan'),
					'kabupaten_pindah' => $this->input->post('kabupaten'),
					'provinsi_pindah' => $this->input->post('provinsi'),
					'kode_pos_pindah' => $this->input->post('kode_pos'),
					'telepon_pindah' => $this->input->post('telepon'),
					'pengikut' => $this->input->post('pengikut'),
					'id_pejabat' => $this->input->post('pejabat'),
					'tanggal_pindah' => date('Y-m-d'),
				);
				$this->m_surat_pindah->tambah_pindah($data);
				$this->session->set_flashdata('sukses', 'Data berhasil ditambahkan.');
				redirect(base_url('surat/pindah/'));
			} else {
				$data['title'] = "Surat Pindah - Desa Salu Induk";
				$data['penduduk'] = $this->m_penduduk->tampil();
				$data['pendudukk'] = $this->m_penduduk->tampil();
				$data['pejabat'] = $this->m_surat_pindah->pejabat();
				$this->load->view('header', $data);
				$this->load->view('surat/tambah_pindah', $data);
				$this->load->view('footer');
			}
		} elseif ($this->uri->segment('3') == "edit") {
			if ($this->input->post('edit_pindah')) {
				$data = array(
					'nik_kepala_keluarga' => $this->input->post('nik_kepala'),
					'nik_pemohon' => $this->input->post('nik_pemohon'),
					'alasan_pindah' => $this->input->post('alasan'),
					'alamat_pindah' => $this->input->post('alamat'),
					'tanggal_pindah' => date('Y-m-d'),
					'rt_pindah' => $this->input->post('rt'),
					'rw_pindah' => $this->input->post('rw'),
					'dusun_pindah' => $this->input->post('dusun'),
					'desa_pindah' => $this->input->post('desa'),
					'kecamatan_pindah' => $this->input->post('kecamatan'),
					'kabupaten_pindah' => $this->input->post('kabupaten'),
					'provinsi_pindah' => $this->input->post('provinsi'),
					'kode_pos_pindah' => $this->input->post('kode_pos'),
					'telepon_pindah' => $this->input->post('telepon'),
					'pengikut' => $this->input->post('pengikut'),
					'id_pejabat' => $this->input->post('pejabat'),
					'tanggal_pindah' => date('Y-m-d'),
				);
				$where = array(
					'id_pindah' => $this->input->post('id'),
				);
				$this->m_surat_pindah->proses_edit_pindah($where, $data);
				$this->session->set_flashdata('sukses', 'Data berhasil diedit.');
				redirect(base_url('surat/pindah/'));
			} else {
				$data['title'] = "Surat Pindah - Desa Salu Induk";
				$data['penduduk'] = $this->m_penduduk->tampil();
				$data['pendudukk'] = $this->m_penduduk->tampil();
				$data['pejabat'] = $this->m_surat_pindah->pejabat();
				$data['pindah'] = $this->m_surat_pindah->edit_pindah($this->uri->segment('4'));
				$this->load->view('header', $data);
				$this->load->view('surat/edit_pindah', $data);
				$this->load->view('footer');
			}
		} elseif ($this->uri->segment('3') == "cetak") {
			$data['pindah'] = $this->m_surat_pindah->cetak_pindah($this->uri->segment('4'));
			$this->load->view('surat/cetak_pindah', $data);
		} elseif ($this->uri->segment('3') == "hapus") {
			$this->m_surat_pindah->hapus_pindah($this->uri->segment('4'));
			$this->session->set_flashdata('sukses', 'Data berhasil dihapus.');
			redirect(base_url('surat/pindah'));
		} else {
			$data['title'] = "Surat Pindah - Desa Salu Induk";
			$data['surat'] = $this->m_surat_pindah->daftar_pindah();
			$mutasi = $this->load->view('header', $data);
			$this->load->view('surat/daftar_pindah');
			$this->load->view('footer');
		}
	}

	public function pernikahan()
	{
		if ($this->uri->segment('3') == "tambah") {
			if ($this->input->post('tambah_pernikahan')) {
				$data = array(
					'nik' => $this->input->post('nik'),
					'id_pejabat' => $this->input->post('pejabat'),
					'tanggal_surat_keterangan' => date('Y-m-d'),
				);
				$this->m_pernikahan->tambah_pernikahan($data);
				$this->session->set_flashdata('sukses', 'Data berhasil ditambahkan.');
				redirect(base_url('surat/pernikahan/'));
			} else {
				$data['title'] = "Surat Keterangan Belum Menikah - Desa Salu Induk";
				$data['penduduk'] = $this->m_penduduk->tampil();
				$data['pejabat'] = $this->m_pernikahan->pejabat();
				$this->load->view('header', $data);
				$this->load->view('surat/tambah_pernikahan', $data);
				$this->load->view('footer');
			}
		} elseif ($this->uri->segment('3') == "edit") {
			if ($this->input->post('edit_pernikahan')) {
				$data = array(
					'nik' => $this->input->post('nik'),
					'id_pejabat' => $this->input->post('pejabat'),
				);
				$where = array(
					'id_pernikahan' => $this->input->post('id'),
				);
				$this->m_pernikahan->proses_edit_pernikahan($where, $data);
				$this->session->set_flashdata('sukses', 'Data berhasil diedit.');
				redirect(base_url('surat/pernikahan/'));
			} else {
				$data['title'] = "Surat Keterangan Belum Menikah - Desa Salu Induk";
				$data['penduduk'] = $this->m_penduduk->tampil();
				$data['pejabat'] = $this->m_pernikahan->pejabat();
				$data['pernikahan'] = $this->m_pernikahan->edit_pernikahan($this->uri->segment('4'));
				$this->load->view('header', $data);
				$this->load->view('surat/edit_pernikahan', $data);
				$this->load->view('footer');
			}
		} elseif ($this->uri->segment('3') == "cetak") {
			$data['pernikahan'] = $this->m_pernikahan->cetak_pernikahan($this->uri->segment('4'));
			$this->load->view('surat/cetak_pernikahan', $data);
		} elseif ($this->uri->segment('3') == "hapus") {
			$this->m_pernikahan->hapus_pernikahan($this->uri->segment('4'));
			$this->session->set_flashdata('sukses', 'Data berhasil dihapus.');
			redirect(base_url('surat/pernikahan'));
		} else {
			$data['title'] = "Surat Keterangan Belum Menikah - Desa Salu Induk";
			$data['surat'] = $this->m_pernikahan->daftar_pernikahan();
			$mutasi = $this->load->view('header', $data);
			$this->load->view('surat/daftar_pernikahan');
			$this->load->view('footer');
		}
	}


	public function pengantar_haji()
	{
		if ($this->uri->segment('3') == "tambah") {
			if ($this->input->post('tambah_pengantar_haji')) {
				$data = array(
					'nik' => $this->input->post('nik'),
					'id_pejabat' => $this->input->post('pejabat'),
					'tanggal_pengantar_haji' => date('Y-m-d'),
				);
				$this->m_pengantar_haji->tambah_pengantar_haji($data);
				$this->session->set_flashdata('sukses', 'Data berhasil ditambahkan.');
				redirect(base_url('surat/pengantar_haji/'));
			} else {
				$data['title'] = "Surat Keterangan Cerai Mati - Desa Salu Induk";
				$data['penduduk'] = $this->m_penduduk->tampil();
				$data['pejabat'] = $this->m_pengantar_haji->pejabat();
				$this->load->view('header', $data);
				$this->load->view('surat/tambah_pengantar_haji', $data);
				$this->load->view('footer');
			}
		} elseif ($this->uri->segment('3') == "edit") {
			if ($this->input->post('edit_pengantar_haji')) {
				$data = array(
					'nik' => $this->input->post('nik'),
					'id_pejabat' => $this->input->post('pejabat'),
				);
				$where = array(
					'id_pengantar_haji' => $this->input->post('id'),
				);
				$this->m_pengantar_haji->proses_edit_pengantar_haji($where, $data);
				$this->session->set_flashdata('sukses', 'Data berhasil diedit.');
				redirect(base_url('surat/pengantar_haji/'));
			} else {
				$data['title'] = "Surat Keterangan Cerai Mati - Desa Salu Induk";
				$data['penduduk'] = $this->m_penduduk->tampil();
				$data['pejabat'] = $this->m_pengantar_haji->pejabat();
				$data['pengantar_haji'] = $this->m_pengantar_haji->edit_pengantar_haji($this->uri->segment('4'));
				$this->load->view('header', $data);
				$this->load->view('surat/edit_pengantar_haji', $data);
				$this->load->view('footer');
			}
		} elseif ($this->uri->segment('3') == "cetak") {
			$data['pengantar_haji'] = $this->m_pengantar_haji->cetak_pengantar_haji($this->uri->segment('4'));
			$this->load->view('surat/cetak_pengantar_haji', $data);
		} elseif ($this->uri->segment('3') == "hapus") {
			$this->m_pengantar_haji->hapus_pengantar_haji($this->uri->segment('4'));
			$this->session->set_flashdata('sukses', 'Data berhasil dihapus.');
			redirect(base_url('surat/pengantar_haji'));
		} else {
			$data['title'] = "Surat Keterangan Cerai Mati - Desa Salu Induk";
			$data['surat'] = $this->m_pengantar_haji->daftar_pengantar_haji();
			$mutasi = $this->load->view('header', $data);
			$this->load->view('surat/daftar_pengantar_haji');
			$this->load->view('footer');
		}
	}

	public function usaha()
	{
		if ($this->uri->segment('3') == "tambah") {
			if ($this->input->post('tambah_usaha')) {
				$data = array(
					'nik' => $this->input->post('nik'),
					'id_pejabat' => $this->input->post('pejabat'),
					'nama_usaha' => $this->input->post('nama'),
					'sejak_usaha' => $this->input->post('sejak'),
					'tanggal_usaha' => date('Y-m-d'),
				);
				$this->m_usaha->tambah_usaha($data);
				$this->session->set_flashdata('sukses', 'Data berhasil ditambahkan.');
				redirect(base_url('surat/usaha/'));
			} else {
				$data['title'] = "Surat Keterangan Usaha - Desa Salu Induk";
				$data['penduduk'] = $this->m_penduduk->tampil();
				$data['pejabat'] = $this->m_usaha->pejabat();
				$this->load->view('header', $data);
				$this->load->view('surat/tambah_usaha', $data);
				$this->load->view('footer');
			}
		} elseif ($this->uri->segment('3') == "edit") {
			if ($this->input->post('edit_usaha')) {
				$data = array(
					'nik' => $this->input->post('nik'),
					'id_pejabat' => $this->input->post('pejabat'),
					'nama_usaha' => $this->input->post('nama'),
					'sejak_usaha' => $this->input->post('sejak'),
				);
				$where = array(
					'id_usaha' => $this->input->post('id'),
				);
				$this->m_usaha->proses_edit_usaha($where, $data);
				$this->session->set_flashdata('sukses', 'Data berhasil diedit.');
				redirect(base_url('surat/usaha/'));
			} else {
				$data['title'] = "Surat Keterangan Usaha - Desa Salu Induk";
				$data['penduduk'] = $this->m_penduduk->tampil();
				$data['pejabat'] = $this->m_usaha->pejabat();
				$data['usaha'] = $this->m_usaha->edit_usaha($this->uri->segment('4'));
				$this->load->view('header', $data);
				$this->load->view('surat/edit_usaha', $data);
				$this->load->view('footer');
			}
		} elseif ($this->uri->segment('3') == "cetak") {
			$data['usaha'] = $this->m_usaha->cetak_usaha($this->uri->segment('4'));
			$this->load->view('surat/cetak_usaha', $data);
		} elseif ($this->uri->segment('3') == "hapus") {
			$this->m_usaha->hapus_usaha($this->uri->segment('4'));
			$this->session->set_flashdata('sukses', 'Data berhasil dihapus.');
			redirect(base_url('surat/usaha'));
		} else {
			$data['title'] = "Surat Keterangan Usaha - Desa Salu Induk";
			$data['surat'] = $this->m_usaha->daftar_usaha();
			$mutasi = $this->load->view('header', $data);
			$this->load->view('surat/daftar_usaha');
			$this->load->view('footer');
		}
	}


	public function surat_kelahiran()
	{
		if ($this->uri->segment('3') == "tambah") {
			if ($this->input->post('tambah_surat_kelahiran')) {
				$data = array(
					'nik_ayah' => $this->input->post('ayah'),
					'nik_ibu' => $this->input->post('ibu'),
					'nik_pelapor' => $this->input->post('pelapor'),
					'nama_anak' => $this->input->post('nama'),
					'kelamin_anak' => $this->input->post('kelamin'),
					'tempat_lahir_anak' => $this->input->post('tempat'),
					'tanggal_lahir_anak' => $this->input->post('tanggal'),
					'jam_lahir_anak' => $this->input->post('jam'),
					'hari_lahir_anak' => $this->input->post('hari'),
					'id_pejabat' => $this->input->post('pejabat'),
					'hubungan_sebagai' => $this->input->post('hubungan'),
					'tanggal_surat_kelahiran' => date('Y-m-d'),
				);
				$this->m_surat_kelahiran->tambah_surat_kelahiran($data);
				$this->session->set_flashdata('sukses', 'Data berhasil ditambahkan.');
				redirect(base_url('surat/surat_kelahiran/'));
			} else {
				$data['title'] = "Surat Kelahiran - Desa Salu Induk";
				$data['penduduk'] = $this->m_penduduk->tampil();
				$data['pendudukk'] = $this->m_penduduk->tampil();
				$data['pendudukkk'] = $this->m_penduduk->tampil();
				$data['pejabat'] = $this->m_surat_kelahiran->pejabat();
				$this->load->view('header', $data);
				$this->load->view('surat/tambah_surat_kelahiran', $data);
				$this->load->view('footer');
			}
		} elseif ($this->uri->segment('3') == "edit") {
			if ($this->input->post('edit_surat_kelahiran')) {
				$data = array(
					'nik_ayah' => $this->input->post('ayah'),
					'nik_ibu' => $this->input->post('ibu'),
					'nik_pelapor' => $this->input->post('pelapor'),
					'nama_anak' => $this->input->post('nama'),
					'kelamin_anak' => $this->input->post('kelamin'),
					'tempat_lahir_anak' => $this->input->post('tempat'),
					'tanggal_lahir_anak' => $this->input->post('tanggal'),
					'jam_lahir_anak' => $this->input->post('jam'),
					'hari_lahir_anak' => $this->input->post('hari'),
					'id_pejabat' => $this->input->post('pejabat'),
					'hubungan_sebagai' => $this->input->post('hubungan'),
				);
				$where = array(
					'id_surat_kelahiran' => $this->input->post('id'),
				);
				$this->m_surat_kelahiran->proses_edit_surat_kelahiran($where, $data);
				$this->session->set_flashdata('sukses', 'Data berhasil diedit.');
				redirect(base_url('surat/surat_kelahiran/'));
			} else {
				$data['title'] = "Surat Kelahiran - Desa Salu Induk";
				$data['penduduk'] = $this->m_penduduk->tampil();
				$data['pendudukk'] = $this->m_penduduk->tampil();
				$data['pendudukkk'] = $this->m_penduduk->tampil();
				$data['pejabat'] = $this->m_surat_kelahiran->pejabat();
				$data['surat_kelahiran'] = $this->m_surat_kelahiran->edit_surat_kelahiran($this->uri->segment('4'));
				$this->load->view('header', $data);
				$this->load->view('surat/edit_surat_kelahiran', $data);
				$this->load->view('footer');
			}
		} elseif ($this->uri->segment('3') == "cetak") {
			$data['surat_kelahiran'] = $this->m_surat_kelahiran->cetak_surat_kelahiran($this->uri->segment('4'));
			$this->load->view('surat/cetak_surat_kelahiran', $data);
		} elseif ($this->uri->segment('3') == "hapus") {
			$this->m_surat_kelahiran->hapus_surat_kelahiran($this->uri->segment('4'));
			$this->session->set_flashdata('sukses', 'Data berhasil dihapus.');
			redirect(base_url('surat/surat_kelahiran'));
		} else {
			$data['title'] = "Surat Kelahiran - Desa Salu Induk";
			$data['surat'] = $this->m_surat_kelahiran->daftar_surat_kelahiran();
			$mutasi = $this->load->view('header', $data);
			$this->load->view('surat/daftar_surat_kelahiran');
			$this->load->view('footer');
		}
	}

	public function surat_kematian()
	{
		if ($this->uri->segment('3') == "tambah") {
			if ($this->input->post('tambah_surat_kematian')) {
				$data = array(
					'nik' => $this->input->post('nik'),
					'nik_pelapor' => $this->input->post('pelapor'),
					'umur_pelapor' => $this->input->post('umur'),
					'tempat_kematian' => $this->input->post('tempat'),
					'tanggal_kematian' => $this->input->post('tanggal'),
					'jam_kematian' => $this->input->post('jam'),
					'sebab_kematian' => $this->input->post('sebab_kematian'),
					'hari_kematian' => $this->input->post('hari'),
					'jam_pemakaman' => $this->input->post('jam_pemakaman'),
					'tempat_pemakaman' => $this->input->post('tempat_pemakaman'),
					'id_pejabat' => $this->input->post('pejabat'),
					'hubungan_sebagai' => $this->input->post('hubungan'),
					'tanggal_surat_kematian' => date('Y-m-d'),
				);
				$this->m_surat_kematian->tambah_surat_kematian($data);
				$this->session->set_flashdata('sukses', 'Data berhasil ditambahkan.');
				redirect(base_url('surat/surat_kematian/'));
			} else {
				$data['title'] = "Surat Kematian - Desa Salu Induk";
				$data['penduduk'] = $this->m_penduduk->tampil();
				$data['pendudukkk'] = $this->m_penduduk->tampil();
				$data['pejabat'] = $this->m_surat_kematian->pejabat();
				$this->load->view('header', $data);
				$this->load->view('surat/tambah_surat_kematian', $data);
				$this->load->view('footer');
			}
		} elseif ($this->uri->segment('3') == "edit") {
			if ($this->input->post('edit_surat_kematian')) {
				$data = array(
					'nik' => $this->input->post('nik'),
					'nik_pelapor' => $this->input->post('pelapor'),
					'umur_pelapor' => $this->input->post('umur'),
					'tempat_kematian' => $this->input->post('tempat'),
					'tanggal_kematian' => $this->input->post('tanggal'),
					'jam_kematian' => $this->input->post('jam'),
					'sebab_kematian' => $this->input->post('sebab_kematian'),
					'hari_kematian' => $this->input->post('hari'),
					'jam_pemakaman' => $this->input->post('jam_pemakaman'),
					'tempat_pemakaman' => $this->input->post('tempat'),
					'id_pejabat' => $this->input->post('pejabat'),
					'hubungan_sebagai' => $this->input->post('hubungan'),
				);
				$where = array(
					'id_surat_kematian' => $this->input->post('id'),
				);
				$this->m_surat_kematian->proses_edit_surat_kematian($where, $data);
				$this->session->set_flashdata('sukses', 'Data berhasil diedit.');
				redirect(base_url('surat/surat_kematian/'));
			} else {
				$data['title'] = "Surat Kematian - Desa Salu Induk";
				$data['penduduk'] = $this->m_penduduk->tampil();
				$data['pendudukkk'] = $this->m_penduduk->tampil();
				$data['pejabat'] = $this->m_surat_kematian->pejabat();
				$data['surat_kematian'] = $this->m_surat_kematian->edit_surat_kematian($this->uri->segment('4'));
				$this->load->view('header', $data);
				$this->load->view('surat/edit_surat_kematian', $data);
				$this->load->view('footer');
			}
		} elseif ($this->uri->segment('3') == "cetak") {
			$data['surat_kematian'] = $this->m_surat_kematian->cetak_surat_kematian($this->uri->segment('4'));
			$this->load->view('surat/cetak_surat_kematian', $data);
		} elseif ($this->uri->segment('3') == "hapus") {
			$this->m_surat_kematian->hapus_surat_kematian($this->uri->segment('4'));
			$this->session->set_flashdata('sukses', 'Data berhasil dihapus.');
			redirect(base_url('surat/surat_kematian'));
		} else {
			$data['title'] = "Surat Kematian - Desa Salu Induk";
			$data['surat'] = $this->m_surat_kematian->daftar_surat_kematian();
			$mutasi = $this->load->view('header', $data);
			$this->load->view('surat/daftar_surat_kematian');
			$this->load->view('footer');
		}
	}
	public function sktm_pendidikan()
	{
		if ($this->uri->segment('3') == "tambah") {
			if ($this->input->post('tambah_sktm_pendidikan')) {
				$data = array(
					'nik_ayah' => $this->input->post('ayah'),
					'nik_anak' => $this->input->post('anak'),
					'id_pejabat' => $this->input->post('pejabat'),
					'tanggal_sktm_pendidikan' => date('Y-m-d'),
				);
				$this->m_sktm_pendidikan->tambah_sktm_pendidikan($data);
				$this->session->set_flashdata('sukses', 'Data berhasil ditambahkan.');
				redirect(base_url('surat/sktm_pendidikan/'));
			} else {
				$data['title'] = "Surat Keterangan Tidak Mampu - Desa Salu Induk";
				$data['penduduk'] = $this->m_penduduk->tampil();
				$data['pendudukk'] = $this->m_penduduk->tampil();
				$data['pejabat'] = $this->m_sktm_pendidikan->pejabat();
				$this->load->view('header', $data);
				$this->load->view('surat/tambah_sktm_pendidikan', $data);
				$this->load->view('footer');
			}
		} elseif ($this->uri->segment('3') == "edit") {
			if ($this->input->post('edit_sktm_pendidikan')) {
				$data = array(
					'nik_ayah' => $this->input->post('ayah'),
					'nik_anak' => $this->input->post('anak'),
					'id_pejabat' => $this->input->post('pejabat'),
				);
				$where = array(
					'id_sktm_pendidikan' => $this->input->post('id'),
				);
				$this->m_sktm_pendidikan->proses_edit_sktm_pendidikan($where, $data);
				$this->session->set_flashdata('sukses', 'Data berhasil diedit.');
				redirect(base_url('surat/sktm_pendidikan/'));
			} else {
				$data['title'] = "Surat Keterangan Tidak Mampu - Desa Salu Induk";
				$data['penduduk'] = $this->m_penduduk->tampil();
				$data['pendudukk'] = $this->m_penduduk->tampil();
				$data['pejabat'] = $this->m_sktm_pendidikan->pejabat();
				$data['sktm_pendidikan'] = $this->m_sktm_pendidikan->edit_sktm_pendidikan($this->uri->segment('4'));
				$this->load->view('header', $data);
				$this->load->view('surat/edit_sktm_pendidikan', $data);
				$this->load->view('footer');
			}
		} elseif ($this->uri->segment('3') == "cetak") {
			$data['sktm_pendidikan'] = $this->m_sktm_pendidikan->cetak_sktm_pendidikan($this->uri->segment('4'));
			$this->load->view('surat/cetak_sktm_pendidikan', $data);
		} elseif ($this->uri->segment('3') == "hapus") {
			$this->m_sktm_pendidikan->hapus_sktm_pendidikan($this->uri->segment('4'));
			$this->session->set_flashdata('sukses', 'Data berhasil dihapus.');
			redirect(base_url('surat/sktm_pendidikan'));
		} else {
			$data['title'] = "Surat Keterangan Tidak Mampu - Desa Salu Induk";
			$data['surat'] = $this->m_sktm_pendidikan->daftar_sktm_pendidikan();
			$mutasi = $this->load->view('header', $data);
			$this->load->view('surat/daftar_sktm_pendidikan');
			$this->load->view('footer');
		}
	}

	public function sktm_kesehatan()
	{
		if ($this->uri->segment('3') == "tambah") {
			if ($this->input->post('tambah_sktm_kesehatan')) {
				$data = array(
					'nik_ayah' => $this->input->post('ayah'),
					'nik_anak' => $this->input->post('anak'),
					'id_pejabat' => $this->input->post('pejabat'),
					'tanggal_sktm_kesehatan' => date('Y-m-d'),
				);
				$this->m_sktm_kesehatan->tambah_sktm_kesehatan($data);
				$this->session->set_flashdata('sukses', 'Data berhasil ditambahkan.');
				redirect(base_url('surat/sktm_kesehatan/'));
			} else {
				$data['title'] = "Surat Keterangan Kesehatan - Desa Salu Induk";
				$data['penduduk'] = $this->m_penduduk->tampil();
				$data['pendudukk'] = $this->m_penduduk->tampil();
				$data['pejabat'] = $this->m_sktm_kesehatan->pejabat();
				$this->load->view('header', $data);
				$this->load->view('surat/tambah_sktm_kesehatan', $data);
				$this->load->view('footer');
			}
		} elseif ($this->uri->segment('3') == "edit") {
			if ($this->input->post('edit_sktm_kesehatan')) {
				$data = array(
					'nik_ayah' => $this->input->post('ayah'),
					'nik_anak' => $this->input->post('anak'),
					'id_pejabat' => $this->input->post('pejabat'),
				);
				$where = array(
					'id_sktm_kesehatan' => $this->input->post('id'),
				);
				$this->m_sktm_kesehatan->proses_edit_sktm_kesehatan($where, $data);
				$this->session->set_flashdata('sukses', 'Data berhasil diedit.');
				redirect(base_url('surat/sktm_kesehatan/'));
			} else {
				$data['title'] = "Surat Keterangan Kesehatan - Desa Salu Induk";
				$data['penduduk'] = $this->m_penduduk->tampil();
				$data['pendudukk'] = $this->m_penduduk->tampil();
				$data['pejabat'] = $this->m_sktm_kesehatan->pejabat();
				$data['sktm_kesehatan'] = $this->m_sktm_kesehatan->edit_sktm_kesehatan($this->uri->segment('4'));
				$this->load->view('header', $data);
				$this->load->view('surat/edit_sktm_kesehatan', $data);
				$this->load->view('footer');
			}
		} elseif ($this->uri->segment('3') == "cetak") {
			$data['sktm_kesehatan'] = $this->m_sktm_kesehatan->cetak_sktm_kesehatan($this->uri->segment('4'));
			$this->load->view('surat/cetak_sktm_kesehatan', $data);
		} elseif ($this->uri->segment('3') == "hapus") {
			$this->m_sktm_kesehatan->hapus_sktm_kesehatan($this->uri->segment('4'));
			$this->session->set_flashdata('sukses', 'Data berhasil dihapus.');
			redirect(base_url('surat/sktm_kesehatan'));
		} else {
			$data['title'] = "Surat Keterangan Kesehatan - Desa Salu Induk";
			$data['surat'] = $this->m_sktm_kesehatan->daftar_sktm_kesehatan();
			$mutasi = $this->load->view('header', $data);
			$this->load->view('surat/daftar_sktm_kesehatan');
			$this->load->view('footer');
		}
	}
}