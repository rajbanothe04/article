<?php

class User extends My_Controller
{
	public function index()
	{
		$this->load->helper('form');
		// $this->load->helper('url');    //this helper metioned in $autoload['helper'] = array('url', 'html');
		$this->load->model('articlesmodel', 'articles');
		$this->load->library('pagination');
		$config = [
			'base_url' => base_url('user/index'),
			'per_page' => 10,
			'total_rows' => $this->articles->count_all_articles(),
			'full_tag_open' => "<ul class='pagination'>",
			'full_tag_close' => "</ul>",
			'first_link_open' => "<li>",
			'first_link_close' => "</li>",
			'last_link_open' => "<li>",
			'last_link_close' => "</li>",
			'next_tag_open' => "<li>",
			'next_tag_close' => "</li>",
			'prev_tag_close' => "<li>",
			'prev_tag_close' => "</li>",
			'num_tag_close' => "<li>",
			'num_tag_close' => "</li>",
			'cur_tag_open' => "<li class='page-item active'><a>",
			'cur_tag_close' => "</a></li>"
		];
		$this->pagination->initialize($config); // initialize pagination
		$articles = $this->articles->all_articles_list($config['per_page'], $this->uri->segment(3));
		$this->load->view('public/articles_list.php', compact('articles')); //compact is a PHP function
	}
	public function search()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('query', 'Search', 'required');
		// print_r($this->form_validation);
		if ($this->form_validation->run() == FALSE) {
			$this->index();
			// return $this->index();
		} else {
			$query = $this->input->post('query');

			return redirect("user/search_results/$query");
		}
		// print_r($query);
		// $this->load->model('articlesmodel', 'articles');
		// $articles =	$this->articles->search($query);
		// $this->load->view('public/search_results', compact('articles'));
	}

	public function search_results($query)
	{
		$this->load->helper('form');
		// print_r($query);

		// $this->load->helper('url');    //this helper metioned in $autoload['helper'] = array('url', 'html');
		$this->load->model('articlesmodel', 'articles');
		$this->load->library('pagination');
		$config = [
			'base_url' => base_url("user/search_results/$query"),
			'per_page' => 10,
			'total_rows' => $this->articles->count_search_results($query),
			'full_tag_open' => "<ul class='pagination'>",
			'full_tag_close' => "</ul>",
			'uri_segment' => 4,
			'first_link_open' => "<li>",
			'first_link_close' => "</li>",
			'last_link_open' => "<li>",
			'last_link_close' => "</li>",
			'next_tag_open' => "<li>",
			'next_tag_close' => "</li>",
			'prev_tag_close' => "<li>",
			'prev_tag_close' => "</li>",
			'num_tag_close' => "<li>",
			'num_tag_close' => "</li>",
			'cur_tag_open' => "<li class='page-item active'><a>",
			'cur_tag_close' => "</a></li>"
		];
		$this->pagination->initialize($config); // initialize pagination	
		$articles = $this->articles->search($query, $config['per_page'], $this->uri->segment(4));
		$this->load->view('public/search_results', compact('articles'));
	}
	public function article($id)
	{
		$this->load->helper('form');
		$this->load->model('articlesmodel', 'articles');
		$article = $this->articles->find($id);
		$this->load->view('public/article_detail', compact('article'));
	}
}