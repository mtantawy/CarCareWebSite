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

		$this->load->model('article');
		$random_products = $this->article->get_random_articles(4,1);
		$random_services = $this->article->get_random_articles(4,2);
		
		$this->load->view('header',array('title' => 'Home', 'isHome' => 'true'));
		//$this->load->view('nav'); //no nav bar in home page
		$this->load->view('home',array('offers_data' => $offers_data, 
			'random_products' => $random_products, 'random_services' => $random_services));
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