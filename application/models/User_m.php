<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class User_m extends CI_Model{

 	public function service($id=null)
	{
		// $this->db->order_by('code', 'ASC');
		if ($id != null) {
			$this->db->where('id_service', $id);
		}
		$this->db->limit(4);
		$query = $this->db->get('service');
		return $query->result_array();
	} 

	public function service_detail($nama=null)
	{
		// $this->db->order_by('code', 'ASC');
		if ($nama != null) {
			$this->db->where('link', $nama);
		}
		$query = $this->db->get('service');
		return $query->result_array();
	} 

	public function news($id=null)
	{
		$this->db->order_by('id_berita', 'DESC');
		if ($id != null) {
			$this->db->where('id_service', $id);
		}
		$this->db->limit(3); 
		$query = $this->db->get('berita');
		return $query->result_array();
	}

	public function news_detail($link=null)
	{
		// $this->db->order_by('code', 'ASC');
		if ($link != null) {
			$this->db->where('link', $link);
		}
		$query = $this->db->get('berita');
		return $query->result_array();
	}

	public function home_news($id=null )
	{
		$this->db->order_by('id_berita', 'DESC');
		if ($id != null) {
			$this->db->where('id_service', $id);
		}
		$this->db->limit(3); 
		$query = $this->db->get('berita');
		return $query->result_array();
	}

	public function newsPagination($limit)
	{
	     $this->db->select('*');
	     $this->db->from('berita');
	     $this->db->order_by('id_berita', 'DESC');
	     $this->db->limit($limit);

	     return $this->db->get();
	}
	public function newscont()
	{
		$query = $this->db->get('berita');
		return $query->num_rows();
	}

	public function struktur_detail($id=null)
	{
		// $this->db->order_by('code', 'ASC');
		if ($id != null) {
			$this->db->where('id_struk', $id);
		}
		$query = $this->db->get('struktur');
		return $query->result_array();
	}




	public function gallery($id=null)
	{
		// $this->db->order_by('code', 'ASC');
		if ($id != null) {
			$this->db->where('id_gallery', $id);
		}
		$this->db->limit(4);
		$query = $this->db->get('gallery');
		return $query->result_array();
	}

	public function gallery_detail($id=null)
	{
		// $this->db->order_by('code', 'ASC');
		if ($id != null) {
			$this->db->where('id_gallery', $id);
		}
		$this->db->select('service.link, gallery.*');
		$this->db->from('gallery');
		$this->db->join('service', 'service.id_service = gallery.kategory');
		$query = $this->db->get();
		return $query->result_array();
	}


	public function testimoni($id=null)
	{
		// $this->db->order_by('code', 'ASC');
		if ($id != null) {
			$this->db->where('id_testi', $id);
		}
		$this->db->limit(4);
		$query = $this->db->get('testimoni');
		return $query->result_array();
	} 

}