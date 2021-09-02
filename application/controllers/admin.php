<?php
class Admin extends My_Controller
{

	public function dashboard()
	{
		// $this->load->model('articlesmodel', 'articles');
		$this->load->library('pagination');
		$config = [
			'base_url' => base_url('admin/dashboard'),
			'per_page' => 5,
			'total_rows' => $this->articles->num_rows(),
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

		$articles = $this->articles->articles_list($config['per_page'], $this->uri->segment(3));
		$this->load->view('admin/dashboard.php', ['articles' => $articles]);
	}
	public function add_article()
	{
		$this->load->view('admin/add_article');
		// $this->input->post();
	}
	public function store_article()
	{
		$config = [
			'upload_path' => './uploads',
			'allowed_types' => 'jpg|jpeg|png|gif',
		];
		$this->load->library('upload', $config); //load library to upload image
		// $this->upload->initialize($config); //We can also initialize config like this
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
		if ($this->form_validation->run('add_article_rules') && $this->upload->do_upload('image')) {
			$post = $this->input->post();
			unset($post['submit']); //to remove the submit from array
			$data = $this->upload->data();
			// echo "<pre>";
			// print_r($data);
			// exit;
			$image_path = base_url("uploads/" . $data['raw_name'] . $data['file_ext']);
			// echo $image_path;
			// exit;
			$post['image_path'] = $image_path;
			return $this->_flashAndRedirect(
				$this->articles->add_article($post),
				"Article added successfully!",
				"Article Failed to add, Please try again"
			);
			// if ($this->articles->add_article($post)) {
			// 	$this->session->set_flashdata('feedback', 'Article added successfully!');
			// 	$this->session->set_flashdata('feedback_class', 'alert-success');
			// } else {
			// 	$this->session->set_flashdata('feedback', 'Article failed to add, please try again.');
			// 	$this->session->set_flashdata('feedback_class', 'alert-danger');
			// }
			// return redirect('admin/dashboard');
		} else {
			$upload_error = $this->upload->display_error();
			$this->load->view('admin/add_article', compact('upload_error'));
		}
	}
	public function edit_article($article_id)
	{
		$article = $this->articles->find_article($article_id);
		$this->load->view('admin/edit_article', ['article' => $article]);
		// print_r($article);
		// echo $article_id;
		// $this->input->get();
	}
	public function update_article($article_id)
	{	// print_r($this->input->post());
		// exit($article_id);
		if ($this->form_validation->run('add_article_rules')) {
			$post = $this->input->post();
			// $article_id = $post['article_id'];
			// unset($post['submit'], $post['article_id']);
			unset($post['submit']); //to remove the submit=> value from array
			return $this->_flashAndRedirect(
				$this->articles->update_article($article_id, $post),
				"Article updated successfully!",
				"Article failed to update, please try again."
			);
		} else {
			$this->load->view('admin/edit_article');
		}
	}
	public function delete_article()
	{
		$article_id = $this->input->post('article_id');
		$this->_flashAndRedirect(
			$this->articles->delete_article($article_id),
			"Article Deleted successfully!",
			"Article failed to delete, please try again."
		);
	}
	public function __construct()
	{

		parent::__construct();
		if (!$this->session->userdata('user_id')) {
			return redirect('login');
		}
		$this->load->model('articlesmodel', 'articles'); //use any name instace of articles
		$this->load->helper('form');
		$this->load->library('form_validation');
	}
	private function _flashAndRedirect($successful, $successMessage, $failureMessage)
	{
		if ($successful) {
			$this->session->set_flashdata('feedback', $successMessage);
			$this->session->set_flashdata('feedback_class', 'alert-success');
		} else {
			$this->session->set_flashdata('feedback', $failureMessage);
			$this->session->set_flashdata('feedback_class', 'alert-danger');
		}
		return redirect('admin/dashboard');
	}
	// public function goto_dashboard()
	// {
	// 	$this->load->view('admin/dashboard');
	// }
}