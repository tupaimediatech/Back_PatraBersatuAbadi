<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		belum_login();
	}


	public function index()
	{
		$data = [
			'base' => 'admin/dashboard',
			'partial' => null,
			'title' => 'Dashboard'
		];

		$this->load->view('base/base', $data);
	}


	// service //
	public function service()
	{

		$masuk = $this->input->post(null, true);
		
		if (isset($masuk['TambahService'])) {
			$val_service = $this->Admin_m->val_service();
			if ($val_service == true) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Service Berhasil Dimasukkan</div>');
				redirect('admin/service/');
			}else{
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Mohon masukkan data yang sesuai</div>');
				redirect('admin/service/');
			}
		}elseif (isset($masuk['UbahService'])) {
			$val_edit_service = $this->Admin_m->val_service();
			if ($val_edit_service == true) {

				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Materi Berhasil DiUbah</div>');
				redirect('admin/service/');
			}else{
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Mohon masukkan data yang sesuai</div>');
				redirect('admin/service/');
			}
		}else{
			$data = [
				'base' => 'admin/service',
				'partial' => null,
				'title' => 'Service',
				'service' => $this->Admin_m->service()
			];
			$this->load->view('base/base',$data);
		}
		 
	}
	public function hapus_service($id=null)
	{
		if ($id == null) {
			redirect('admin/service/');
		}
		$this->Admin_m->service_del($id);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Service Berhasil DiHapus</div>');
		redirect('admin/service/');
	}

	// Service //


	// Berita .///
	public function berita()
	{
		$masuk = $this->input->post(null, true);
		
		if (isset($masuk['tambahberita'])) {

			$val_berita = $this->Admin_m->val_berita();
			if ($val_berita == true) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berita Berhasil Dimasukkan</div>');
				redirect('admin/berita/');
			}else{
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Mohon masukkan data yang sesuai</div>');
				redirect('admin/berita/');
			}
		}elseif (isset($masuk['UbahBerita'])) {
			$val_edit_berita = $this->Admin_m->val_berita();
			if ($val_edit_berita == true) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berita Berhasil DiUbah</div>');
				redirect('admin/berita/');
			}else{
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Mohon masukkan data yang sesuai</div>');
				redirect('admin/berita/');
			}
		}else{
			$data = [
				'base' => 'admin/berita',
				'partial' => 'partial/berita',
				'title' => 'Berita',
				'berita' => $this->Admin_m->berita()
			];

			$this->load->view('base/base', $data);
		}
		
	}

	public function berita_del($id=null)
	{
		if ($id == null) {
			redirect('admin/berita/');
		}
		$this->Admin_m->berita_del($id);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berita Berhasil DiHapus</div>');
		redirect('admin/berita/');
	}

	// Berita .///



	// Testimoni //
	public function testimoni()
	{
		$masuk = $this->input->post(null, true);
		
		if (isset($masuk['TambahTesti'])) {
			$val_testi = $this->Admin_m->val_testi();
			if ($val_testi == true) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Service Berhasil Dimasukkan</div>');
				redirect('admin/testimoni/');
			}else{
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Mohon masukkan data yang sesuai</div>');
				redirect('admin/testimoni/');
			}
		}elseif (isset($masuk['UbahTesti'])) {
			$val_edit_testi = $this->Admin_m->val_testi();
			if ($val_edit_testi == true) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Testimoni Berhasil DiUbah</div>');
				redirect('admin/testimoni/');
			}else{
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Mohon masukkan data yang sesuai</div>');
				redirect('admin/testimoni/');
			}
		}else{
			$data = [
				'base' => 'admin/testimoni',
				'partial' => 'partial/berita',
				'title' => 'Testimoni',
				'testimoni' => $this->Admin_m->testimoni()
			];

			$this->load->view('base/base', $data);
		}
		
	}

	public function testi_del($id=null)
	{
		if ($id == null) {
			redirect('admin/testimoni/');
		}
		$this->Admin_m->testi_del($id);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Testimoni Berhasil DiHapus</div>');
		redirect('admin/testimoni/');
	}

	// Testimoni //


	// User //
	public function user()
	{
		$masuk = $this->input->post(null, true);
		
		if (isset($masuk['TambahUser'])) {
			$val_user = $this->Admin_m->val_user();
			if ($val_user == true) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data User Berhasil Dimasukkan</div>');
				redirect('admin/user/');
			}else{
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Mohon masukkan data yang sesuai</div>');
				redirect('admin/user/');
			}
		}elseif (isset($masuk['UbahUser'])) {
			$val_user = $this->Admin_m->val_user();
			if ($val_user == true) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">User Berhasil DiUbah</div>');
				redirect('admin/user/');
			}else{
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Mohon masukkan data yang sesuai</div>');
				redirect('admin/user/');
			}
		}else{
			$data = [
				'base' => 'admin/user',
				'partial' => 'partial/berita',
				'title' => 'User',
				'users' => $this->Admin_m->user(),
			];

			$this->load->view('base/base', $data);
		}
	}


	public function user_del($id=null)
	{
		if ($id == null) {
			redirect('admin/user/');
		}
		$this->Admin_m->user_del($id);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data User Berhasil DiHapus</div>');
		redirect('admin/user/');
	}
	// User //




	public function gallery()
	{
		$masuk = $this->input->post(null, true);
		
		if (isset($masuk['TambahGallery'])) {
			$val_galery = $this->Admin_m->val_galery();
			if ($val_galery == true) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Gallery Berhasil Dimasukkan</div>');
				redirect('admin/gallery/');
			}else{
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Mohon masukkan data yang sesuai</div>');
				redirect('admin/gallery/');
			}
		}elseif (isset($masuk['UbahGallery'])) {
			$val_galery = $this->Admin_m->val_galery();
			if ($val_galery == true) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Gallery Berhasil DiUbah</div>');
				redirect('admin/gallery/');
			}else{
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Mohon masukkan data yang sesuai</div>');
				redirect('admin/gallery/');
			}
		}else{
			$data = [
				'base' => 'admin/gallery',
				'partial' => 'partial/berita',
				'title' => 'Gallery',
				'gallerys' => $this->Admin_m->gallery_servis(),
				'services' => $this->Admin_m->service()

			];

			$this->load->view('base/base', $data);
		}
		
	}
	public function gallery_del($id=null)
	{
		if ($id == null) {
			redirect('admin/gallery/');
		}
		$this->Admin_m->gallery_del($id);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Gallery Berhasil DiHapus</div>');
		redirect('admin/gallery/');
	}
}
