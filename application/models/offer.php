<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Offer extends CI_Model {

	function get_offers() {

		$this->db->from('articles')->where('type', '3');
		$query = $this->db->get();
		$result_offers = $query->result_array();

		return $result_offers;
	}

}