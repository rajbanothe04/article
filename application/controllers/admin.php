<?php
class Admin extends My_Controller
{
	public function dashboard()
	{
		$this->load->model('articlesmodel', 'articles'); //use any name instace of articles
		$articles = $this->articles->articles_list();
		$this->load->view('admin/dashboard.php', ['articles' => $articles]);
	}
	public function add_article()
	{
	}
	public function edit_article()
	{
	}
	public function delete_article()
	{
	}
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('user_id')) {
			return redirect('login');
		}
	}
}