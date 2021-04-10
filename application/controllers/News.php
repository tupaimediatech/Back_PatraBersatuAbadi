<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	public function index()
	{
		$data = [
			'base' => 'home/news',
			'partial' => null,
			'title' => 'News',
			'berita' => $this->User_m->home_news()
		];
		$perpage = 3;
		$perpage = $perpage*1;
		$total = $this->User_m->newscont();

		if ( (int) ceil($total/3) == 1 ) {
			$data['stop'] = 1;
		}elseif ((int) ceil($total/3) == 2) {
			$data['stop'] = 2;
		}elseif ((int) ceil($total/3) == 3) {
			$data['stop'] = 3;
		}

		$this->load->view('base/home', $data);
	}

	public function page($id='')
	{
		if (!is_numeric($id)) {
			redirect('news/');
		}elseif ($id== null) {
			redirect('news/');
		}
		$data = [
			'base' => 'home/page',
			'partial' => null,
			'title' => 'News'
		];

		$perpage = 3;
		$perpage = $perpage*$id;
		$total = $this->User_m->newscont();

		if ((int) ceil($total/3) == 3) {
			$data['stop'] = 3;
		}elseif ($perpage < $total ) {
			$data['stop'] = 'tidak';
		}else{
			$data['stop'] = 'ya';
		}
		$data['berita'] = $this->User_m->newsPagination($perpage)->result_array();

		$this->load->view('base/home', $data);
	}
	public function detail($link='')
	{
		if ($link == null) {
			redirect(base_url());
		}
		$data = [
			'base' => 'home/news_detail',
			'partial' => null,
			'berita' => $this->User_m->news_detail($link),
			'title' => $this->User_m->news_detail($link)[0]['judul_berita']
		];

		$this->load->view('base/home', $data);

	}


}
