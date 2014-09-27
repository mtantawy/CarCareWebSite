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

	function get_random_articles($count, $type) {

		$this->db->select('id')->from('articles')->where('type', $type);
		$query = $this->db->get();
		$result_article_ids = $query->result_array();

		$random_ids = array();
		if($count > count($result_article_ids)) $count = count($result_article_ids);
		for($i=0; $i<$count; $i++) {
			$random_id = $result_article_ids[mt_rand(0,count($result_article_ids)-1)]['id'];

			//checking for duplicates
			foreach($random_ids as $key => $value) {
				if($random_id == $value) {
					$i--;
					continue 2;
				}
			}
			$random_ids[] = $random_id;
		}

		$this->db->from('articles')->where_in('id', $random_ids);
		$query = $this->db->get();
		$result_articles = $query->result_array();

		return $result_articles;
	}


}