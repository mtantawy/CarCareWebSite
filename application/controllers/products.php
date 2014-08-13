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
		$this->load->view('footer');
	}

	public function brand($brand_id)
	{
		$this->load->view('header');
		$this->load->view('nav');
		$this->load->view('brand');
		$this->load->view('footer');
	}

	public function product()
	{
		$this->load->view('header');
		$this->load->view('nav');
		$this->load->view('the_product');
		$this->load->view('footer');
	}

}