<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Services extends CI_Controller {

	public function index()
	{
		$this->categories();
	}

	public function categories()
	{
		$this->load->view('header');
		//$this->load->view('nav'); //no nav bar in home page
		$this->load->view('home');
		$this->load->view('footer');
	}

	public function category($category_id)
	{
		$this->load->view('header');
		$this->load->view('nav');
		$this->load->view('about');
		$this->load->view('footer');
	}

	public function service()
	{
		$this->load->view('header');
		$this->load->view('nav');
		$this->load->view('services');
		$this->load->view('footer');
	}