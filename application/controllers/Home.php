<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data = [
			'base' => 'home/index',
			'partial' => null,
			'title' => 'Home',
			'service' => $this->User_m->service(),
			'berita' => $this->User_m->news(),
			'testimoni' => $this->User_m->testimoni(),
			'gallerys' => $this->User_m->gallery(),
		];

		$this->load->view('base/home', $data);
	}


}
