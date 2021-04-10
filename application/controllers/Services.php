<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function detail($nama)
	{
		$data = [
			'base' => 'home/service_detail',
			'partial' => null,
			'title' => 'Service Detail',
			'services' => $this->User_m->service_detail($nama),
		];
		// var_dump($data['service']);
		// die();

		$this->load->view('base/home', $data);
	}


}
