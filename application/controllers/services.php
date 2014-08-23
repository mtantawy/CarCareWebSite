<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Services extends CI_Controller {

	public function index()
	{
		$this->categories();
	}

	public function categories()
	{
		$this->load->view('header');
		$this->load->view('categories');
		$this->load->view('home');
		$this->load->view('right_sidebar');
		$this->load->view('footer');
	}

	public function category($category_id)
	{
		$this->load->view('header');
		$this->load->view('nav');
		$this->load->view('category');
		$this->load->view('right_sidebar');
		$this->load->view('footer');
	}

	public function service($service_id)
	{
		$this->load->model('article');
		$article_data = $this->article->get_article($service_id);
		//$data = array('article_data' => $article_data);

		$this->load->view('header',array('title' => $article_data['title']));
		$this->load->view('nav',array('page' => 'services'));
		$this->load->view('service',array('article_data' => $article_data));
		$this->load->view('right_sidebar');
		$this->load->view('footer');
	}

}