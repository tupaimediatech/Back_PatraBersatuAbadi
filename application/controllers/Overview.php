<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Overview extends CI_Controller {

	public function index()
	{
		$data = [
			'base' => 'home/overview',
			'partial' => null,
			'title' => 'Overview'
		];

		$this->load->view('base/home', $data);
	}


}
