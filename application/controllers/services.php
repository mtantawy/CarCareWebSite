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

	public function service()
	{
		$this->load->view('header');
		$this->load->view('nav');
		$this->load->view('service');
		$this->load->view('right_sidebar');
		$this->load->view('footer');
	}

}