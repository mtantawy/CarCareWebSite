<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Article extends CI_Model {

	function get_article($id) {

		$article_data = array();

		$this->db->from('articles')->where('id', $id);
		$query = $this->db->get();
		$result_article = $query->result_array();
		$article_data = array_merge($article_data, $result_article[0]);

		$this->db->from('articles_body')->where('articleid', $id);
		$query = $this->db->get();
		$result_article_body = $query->result_array();
		$article_data = array_merge($article_data, $result_article_body[0]);

		$this->db->from('links')->where('articleid', $id);
		$query = $this->db->get();
		$result_links = $query->result_array();
		$links = array ('facebook_link' => $result_links[0]['url'], 'souq_link' => $result_links[1]['url']);
		$article_data = array_merge($article_data, $links);

		return $article_data;

	}


}