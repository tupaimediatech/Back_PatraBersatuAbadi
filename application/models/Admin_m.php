<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Admin_m extends CI_Model{
 
	// Model Login Nitip
	public function cek_login($data){
		$q = $this->db->get_where('user', ['username' => $data['user']])->row_array();
		if (count($q) != 0) {
			if (password_verify($data['pasw'], $q['password'])) {
				$user = [
					'ud' => $q['id_user'],
					'user' => $q['username'],
					'level' => $q['posisi'],
					'nama' => $q['nama']
				];
				$this->session->set_userdata($user);
				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Selamat datang di Dashboard E-Learning '. $this->session->userdata('nama') .'!</div>');
				redirect('admin');
			}else{
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Password yang anda masukkan salah!</div>');
				redirect('login');
			}
		}else{
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Username Yang Anda Masukkan Tidak Terdaftar!</div>');
			redirect('login');
		}
	}


 	public function service($id=null)
	{
		// $this->db->order_by('code', 'ASC');
		if ($id != null) {
			$this->db->where('id_service', $id);
		}
		$query = $this->db->get('service');
		return $query->result_array();
	} 
 	public function berita($id=null)
	{
		$this->db->order_by('id_berita', 'DESC');
		if ($id != null) {
			$this->db->where('id_berita', $id);
		}
		$query = $this->db->get('berita');
		return $query->result_array();
	} 
	public function testimoni($id=null)
	{
		// $this->db->order_by('code', 'ASC');
		if ($id != null) {
			$this->db->where('id_testi', $id);
		}
		$query = $this->db->get('testimoni');
		return $query->result_array();
	} 
	public function user($id=null)
	{
		// $this->db->order_by('code', 'ASC');
		if ($id != null) {
			$this->db->where('id_user', $id);
		}
		$query = $this->db->get('user');
		return $query->result_array();
	} 
	public function gallery($id=null)
	{
		// $this->db->order_by('code', 'ASC');
		if ($id != null) {
			$this->db->where('id_gallery', $id);
		}
		$query = $this->db->get('gallery');
		return $query->result_array();
	} 
	

	// Join //
	public function gallery_servis($id=null)
	{
		// $this->db->order_by('code', 'ASC');
		if ($id != null) {
			$this->db->where('id_gallery', $id);
		}

		$this->db->select('gallery.*, service.nama_service');
		$this->db->from('gallery');
		$this->db->join('service', 'service.id_service = gallery.kategory');

		$query = $this->db->get();
		return $query->result_array();
	} 



	// Join //






	// Upload File //
	public function proses($path = null){

		if ($path == 'service') {
			$config['upload_path']          = './assets/images/service/';
		}elseif ($path == 'berita') {
			$config['upload_path']          = './assets/images/berita/';
		}elseif ($path == 'testi') {
			$config['upload_path']          = './assets/images/testi/';
		}elseif ($path == 'user') {
			$config['upload_path']          = './assets/images/user/';
		}elseif ($path == 'gallery') {
			$config['upload_path']          = './assets/images/gallery/';
		}
	    
	    $config['allowed_types']        = 'gif|jpg|png|docx|pdf';
	    $config['overwrite']			= true;
	    $config['max_size']             = 50024; // 50MB

	    $this->load->library('upload', $config);

	    if (isset($_FILES['img']['name']) != "") {
		    if ($this->upload->do_upload('img')) {
		        return $this->upload->data("file_name");
		    }  
	    }elseif (isset($_FILES['img2']['name']) != "") {
	    	if ($this->upload->do_upload('img2')) {
		        return $this->upload->data("file_name");
		    } 
	    }
	}



	function deleteDirectory($dir) {
	    if (!file_exists($dir)) {
	        return true;
	    }

	    if (!is_dir($dir)) {
	        return unlink($dir);
	    }

	    foreach (scandir($dir) as $item) {
	        if ($item == '.' || $item == '..') {
	            continue;
	        }

	        if (!$this->deleteDirectory($dir . '/' . $item)) {
	            return false;
	        }

	    }

	    return rmdir($dir);
	}



	// Upload File //
  


  	// Service // 
	public function val_service()
	{
		$this->form_validation->set_rules('nama_service', 'Nama Service', 'required|trim');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
		$this->form_validation->set_message('required', '{field} mohon diisi');
		if ($this->form_validation->run() == false) {
			return false;
		}else{
			$data = $this->input->post(null, true);
			if (isset($data['TambahService'])) {
				$this->TambahService();
			}elseif (isset($data['UbahService'])) {
				$this->EditService();
			}
			
			return true;
		}
	}


	public function TambahService()
	{
		$data = $this->input->post(null, true);
		$params = [
			'nama_service' => ucwords($data['nama_service']),
			'deskripsi' => ucfirst($data['deskripsi']),
			
		];
		if ($_FILES['img']['name'] != null) {
			$upload = $this->proses('service');
		}
		$params['img'] = $upload != null ? $upload : 'default.jpg';
		$this->db->insert('service', $params);
	}

	public function EditService()
	{
		$data = $this->input->post(null, true);
		$params = [
			'nama_service' => ucwords($data['nama_service']),
			'deskripsi' => ucfirst($data['deskripsi']),
			
		];

		if ($_FILES['img']['name'] != null) {
			$upload = $this->proses('service');
			$params['img'] = $upload != null ? $upload : $this->service($data['id'])[0]['img'];
			if ($this->service($data['id'])[0]['img'] != 'default.jpg') {
				$this->deleteDirectory('./assets/images/service/'.$this->service($data['id'])[0]['img']);
			}
		}

		$this->db->where('id_service', $data['id']);
		$this->db->update('service', $params);
	}

	public function service_del($id=null)
	{
		if ($this->service($id)[0]['img'] != 'default.jpg') {
			$this->deleteDirectory('./assets/images/service/'.$this->service($id)[0]['img']);
		}
		$this->db->where('id_service', $id);
		$this->db->delete('service');
	}


  	// Service //



  	// Berita // 
	public function val_berita()
	{
		$this->form_validation->set_rules('judul', 'Judul', 'required|trim');
		$this->form_validation->set_rules('isi', 'Isi', 'required');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
		$this->form_validation->set_message('required', '{field} mohon diisi');
		if ($this->form_validation->run() == false) {
			return false;
		}else{
			$data = $this->input->post(null, true);
			if (isset($data['tambahberita'])) {
				$this->TambahBerita();
			}elseif (isset($data['UbahBerita'])) {
				$this->EditBerita();
			}
			return true;
		}
	}

	public function TambahBerita()
	{
		$data = $this->input->post(null, true);
		$params = [
			'judul_berita' => ucfirst($data['judul']),
			'isi' => $data['isi'],
			'tanggal' => date('Y-m-d', strtotime($data['tanggal'])),
			'link' => strtolower(rep($data['judul'])) ,
			
		];
		if ($_FILES['img']['name'] != null) {
			$upload = $this->proses('berita');
		}
		$params['img'] = $upload != null ? $upload : 'default.jpg';
		// var_dump($params['tanggal']);
		// die();
		$this->db->insert('berita', $params);
	}

	public function EditBerita()
	{
		$data = $this->input->post(null, true);
		$params = [
			'judul_berita' => ucfirst($data['judul']),
			'isi' => $data['isi'],
			'tanggal' => date('Y-m-d', strtotime($data['tanggal'])),
			'link' => strtolower(rep($data['judul'])) ,
			
		];

		if ($_FILES['img']['name'] != null) {
			$upload = $this->proses('berita');
			$params['img'] = $upload != null ? $upload : $this->berita($data['id'])[0]['img'];
			if ($this->berita($data['id'])[0]['img'] != 'default.jpg') {
				$this->deleteDirectory('./assets/images/berita/'.$this->berita($data['id'])[0]['img']);
			}
		}

		$this->db->where('id_berita', $data['id']);
		$this->db->update('berita', $params);
	}

	public function berita_del($id=null)
	{
		if ($this->berita($id)[0]['img'] != 'default.jpg') {
			$this->deleteDirectory('./assets/images/berita/'.$this->berita($id)[0]['img']);
		}
		$this->db->where('id_berita', $id);
		$this->db->delete('berita');
	}


  	// Berita //



  	// Tetimoni // 
	public function val_testi()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('posisi', 'Posisi', 'required');
		$this->form_validation->set_rules('isi', 'Isi Tetimoni', 'required');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
		$this->form_validation->set_message('required', '{field} mohon diisi');
		if ($this->form_validation->run() == false) {
			return false;
		}else{
			$data = $this->input->post(null, true);
			if (isset($data['TambahTesti'])) {
				$this->Tambahtesti();
			}elseif (isset($data['UbahTesti'])) {
				$this->Edittesti();
			}
			
			return true;
		}
	}


	public function Tambahtesti()
	{
		$data = $this->input->post(null, true);
		$params = [
			'oleh' => ucfirst($data['nama']),
			'posisi' => strtoupper($data['posisi']),
			'isi' => ucfirst($data['isi']),
			'tanggal' => date('Y-m-d', strtotime($data['tanggal']))
			
		];
		if ($_FILES['img']['name'] != null) {
			$upload = $this->proses('testi');
		}
		$params['img'] = $upload != null ? $upload : 'default.jpg';
		$this->db->insert('testimoni', $params);
	}

	public function Edittesti()
	{
		$data = $this->input->post(null, true);
		$params = [
			'oleh' => ucfirst($data['nama']),
			'posisi' => strtoupper($data['posisi']),
			'isi' => ucfirst($data['isi']),
			'tanggal' => date('Y-m-d', strtotime($data['tanggal']))
		];

		if ($_FILES['img']['name'] != null) {
			$upload = $this->proses('testi');
			$params['img'] = $upload != null ? $upload : $this->testimoni($data['id'])[0]['img'];
			if ($this->testimoni($data['id'])[0]['img'] != 'default.jpg') {
				$this->deleteDirectory('./assets/images/testi/'.$this->testimoni($data['id'])[0]['img']);
			}
		}

		$this->db->where('id_testi', $data['id']);
		$this->db->update('testimoni', $params);
	}

	public function testi_del($id=null)
	{
		if ($this->testimoni($id)[0]['img'] != 'default.jpg') {
			$this->deleteDirectory('./assets/images/testi/'.$this->testimoni($id)[0]['img']);
		}
		$this->db->where('id_testi', $id);
		$this->db->delete('testimoni');
	}

	  	
	// Tetimoni // 
	public function val_user()
	{
		$data = $this->input->post(null, true);
		if (isset($data['TambahUser'])) {
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('username', 'Username', 'required|is_unique[user.username]');
		}if (isset($data['UbahUser'])) {
			$this->form_validation->set_rules('username', 'Username', 'required|trim');
		}
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('posisi', 'Posisi', 'required');
		$this->form_validation->set_message('required', '{field} mohon diisi');
		if ($this->form_validation->run() == false) {

			return false;
		}else{
			if (isset($data['TambahUser'])) {
				$this->TambahUser();
			}elseif (isset($data['UbahUser'])) {
				$this->EditUser();
			}
			return true;
		}
	}


	public function TambahUser()
	{
		$data = $this->input->post(null, true);
		$params = [
			'username' => strtolower($data['username']),
			'nama' => ucfirst($data['nama']),
			'posisi' => ucfirst($data['posisi']),
			'password' => password_hash(strtolower($data['password']), PASSWORD_DEFAULT),
		];
		if ($_FILES['img']['name'] != null) {
			$upload = $this->proses('user');
		}
		$params['img'] = $upload != null ? $upload : 'default.jpg';
		$this->db->insert('user', $params);
	}

	public function EditUser()
	{
		$data = $this->input->post(null, true);
		$params = [
			'username' => strtolower($data['username']),
			'nama' => ucfirst($data['nama']),
			'posisi' => ucfirst($data['posisi']),
			
		];
		if ($data['password'] != null) {
			$params['password'] = password_hash(strtolower($data['password']), PASSWORD_DEFAULT);
		}

		if ($_FILES['img']['name'] != null) {
			$upload = $this->proses('user');
			$params['img'] = $upload != null ? $upload : $this->user($data['id'])[0]['img'];
			if ($this->user($data['id'])[0]['img'] != 'default.jpg') {
				$this->deleteDirectory('./assets/images/user/'.$this->user($data['id'])[0]['img']);
			}
		}

		$this->db->where('id_user', $data['id']);
		$this->db->update('user', $params);
	}



	public function user_del($id=null)
	{
		if ($this->user($id)[0]['img'] != 'default.jpg') {
			$this->deleteDirectory('./assets/images/user/'.$this->user($id)[0]['img']);
		}
		$this->db->where('id_user', $id);
		$this->db->delete('user');
	}
	// Usernyaa //


	// Gallery // 
	public function val_galery()
	{
		$this->form_validation->set_rules('caption', 'Caption', 'required');
		$this->form_validation->set_rules('kategori', 'Kategori', 'required');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
		$this->form_validation->set_message('required', '{field} mohon diisi');
		if ($this->form_validation->run() == false) {
			return false;
		}else{
			$data = $this->input->post(null, true);
			if (isset($data['TambahGallery'])) {
				$this->TambahGallery();
			}elseif (isset($data['UbahGallery'])) {
				$this->UbahGallery();
			}
			return true;
		}
	}


	public function TambahGallery()
	{
		$data = $this->input->post(null, true);
		$params = [
			'caption' => ucfirst($data['caption']),
			'kategory' => $data['kategori'],
			'tanggal' => date('Y-m-d', strtotime($data['tanggal']))
		];
		if ($_FILES['img']['name'] != null) {
			$upload = $this->proses('gallery');
		}
		$params['foto'] = $upload != null ? $upload : 'default.jpg';
		$this->db->insert('gallery', $params);
	}

	public function UbahGallery()
	{
		$data = $this->input->post(null, true);
		$params = [
			'caption' => ucfirst($data['caption']),
			'kategory' => $data['kategori'],
			'tanggal' => date('Y-m-d', strtotime($data['tanggal']))
		];

		if ($_FILES['img']['name'] != null) {
			$upload = $this->proses('gallery');
			$params['foto'] = $upload != null ? $upload : $this->gallery($data['id'])[0]['foto'];
			if ($this->gallery($data['id'])[0]['foto'] != 'default.jpg') {
				$this->deleteDirectory('./assets/images/gallery/'.$this->gallery($data['id'])[0]['foto']);
			}
		}

		$this->db->where('id_gallery', $data['id']);
		$this->db->update('gallery', $params);
	}

	public function gallery_del($id=null)
	{
		if ($this->gallery($id)[0]['foto'] != 'default.jpg') {
			$this->deleteDirectory('./assets/images/gallery/'.$this->gallery($id)[0]['foto']);
		}
		$this->db->where('id_gallery', $id);
		$this->db->delete('gallery');
	}


  	// Gallery //






}