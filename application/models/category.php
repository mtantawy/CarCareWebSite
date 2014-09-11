<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category extends CI_Model {

	function get_categories($parentid) {

		$this->db->from('categories')->where('parentid', $parentid);
		$query = $this->db->get();
		$result_categories = $query->result_array();

		return $result_categories;
	}

	function get_category_articles($categoryid) {

		$this->db->from('articles')->where('categoryid', $categoryid);
		$query = $this->db->get();
		$result_category_articles = $query->result_array();

		return $result_category_articles;
	}

	function get_category($categoryid) {

		$this->db->from('categories')->where('id', $categoryid);
		$query = $this->db->get();
		$result_category = $query->result_array();

		return $result_category[0];
	}


}