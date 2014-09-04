<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category extends CI_Model {

	function get_categories($parentid) {

		$article_data = array();

		$this->db->from('categories')->where('parentid', $parentid);
		$query = $this->db->get();
		$result_categories = $query->result_array();

		return $result_categories;
	}

	function get_category_articles($categoryid) {

		$article_data = array();

		$this->db->from('articles')->where('categoryid', $categoryid);
		$query = $this->db->get();
		$result_category_articles = $query->result_array();

		return $result_category_articles;
	}


}