<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Subscribe extends CI_Model {

	function add_subscription($subscriber_data) {

		return $this->db->insert('subscriptions', $subscriber_data);
	}

}