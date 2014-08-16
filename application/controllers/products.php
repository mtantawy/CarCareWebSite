<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

	public function index()
	{
		$this->brands();
	}

	public function brands()
	{
		$this->load->view('header');
		$this->load->view('brands');
		$this->load->view('home');
		$this->load->view('right_sidebar');
		$this->load->view('footer');
	}

	public function brand($brand_id)
	{
		$this->load->view('header');
		$this->load->view('nav');
		$this->load->view('brand');
		$this->load->view('right_sidebar');
		$this->load->view('footer');
	}

	public function product($product_id)
	{
		$this->load->model('article');
		$article_data = $this->article->get_article($product_id);
		//$data = array('article_data' => $article_data);

		$this->load->view('header',array('title' => $article_data['title']));
		$this->load->view('nav',array('page' => 'products'));
		$this->load->view('product',array('article_data' => $article_data));
		$this->load->view('right_sidebar');
		$this->load->view('footer');
	}

}