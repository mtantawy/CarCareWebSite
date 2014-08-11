<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

	public function index()
	{
		echo 'hhh';
		$this->brands();
	}

	public function brands()
	{
		$this->load->view('header');
		//$this->load->view('nav'); //no nav bar in home page
		$this->load->view('home');
		$this->load->view('footer');
	}

	public function brand($brand_id)
	{
		$this->load->view('header');
		$this->load->view('nav');
		$this->load->view('about');
		$this->load->view('footer');
	}

	public function product()
	{
		$this->load->view('header');
		$this->load->view('nav');
		$this->load->view('services');
		$this->load->view('footer');
	}