<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data = [
			'base' => 'home/gallery',
			'partial' => null,
			'title' => 'Gallery',
			'gallery' => $this->User_m->gallery_detail(),
			'service' => $this->User_m->service(),
		];
		// var_dump($data['service']);
		// die();

		$this->load->view('base/home', $data);
	}


}
