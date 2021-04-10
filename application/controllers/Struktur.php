<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Struktur extends CI_Controller {

	public function index()
	{
		$data = [
			'base' => 'home/struktur',
			'partial' => null,
			'title' => 'Profile',
			'berita' => $this->User_m->news()
		];

		$this->load->view('base/home', $data);
	}

	public function detail($id='')
	{
		if ($id == null) {
			redirect(base_url());
		}
		$data = [
			'base' => 'home/struktur_detail',
			'partial' => null,
			'title' => 'Profile',
			'struktur' => $this->User_m->struktur_detail($id)
		];

		$this->load->view('base/home', $data);

	}


}
