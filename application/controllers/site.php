<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	public function index()
	{
		$this->home();
	}

	public function home()
	{
		$this->load->model('offer');
		$offers_data = $this->offer->get_offers();
		
		$this->load->view('header');
		//$this->load->view('nav'); //no nav bar in home page
		$this->load->view('home',array('offers' => $offers_data));
		$this->load->view('right_sidebar');
		$this->load->view('footer');
	}

	public function about()
	{
		$this->load->view('header',array('title' => 'About Us'));
		$this->load->view('nav',array('page' => 'about'));
		$this->load->view('about');
		$this->load->view('right_sidebar');
		$this->load->view('footer');
	}

	public function franchise()
	{
		$this->load->view('header',array('title' => 'Franchising!'));
		$this->load->view('nav',array('page' => 'franchise'));
		$this->load->view('franchise');
		$this->load->view('right_sidebar');
		$this->load->view('footer');
	}

	public function contact()
	{
		$this->load->view('header',array('title' => 'Contact Us'));
		$this->load->view('nav',array('page' => 'contact'));
		$this->load->view('contact');
		$this->load->view('right_sidebar');
		$this->load->view('footer');
	}

}