<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Offers extends CI_Controller {

	public function index()
	{
		$this->offers_list();
	}

	public function offers_list()
	{
		$this->load->model('offer');
		$offers_data = $this->offer->get_offers();

		$this->load->view('header',array('title' => 'Our offers!'));
		$this->load->view('nav',array('page' => 'offers'));
		$this->load->view('offers',array('offers_data' => $offers_data));
		$this->load->view('right_sidebar');
		$this->load->view('footer');
	}

	public function offer($offer_id)
	{
		$this->load->model('article');
		$article_data = $this->article->get_article($offer_id);

		$this->load->view('header',array('title' => $article_data['title']));
		$this->load->view('nav',array('page' => 'offers'));
		$this->load->view('offer',array('article_data' => $article_data));
		$this->load->view('right_sidebar');
		$this->load->view('footer');
	}

}