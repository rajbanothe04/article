<?php

class User extends My_Controller
{
	public function index()
	{
		// $this->load->helper('url');    //this helper metioned in $autoload['helper'] = array('url', 'html');
		$this->load->view('public/articles_list.php');
	}
}