<?php
class Articlesmodel extends CI_Model
{
	public function articles_list()
	{
		$user_id = $this->session->userdata('user_id');
		$query = $this->db
			->select('title')
			->from('articles')
			->where('user_id', $user_id)
			->get();
		// print_r($query->result());exit;
		return $query->result();
	}
}