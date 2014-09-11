<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Subscription extends CI_Controller {

	public function index()
	{
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');

		$this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[3]|xss_clean');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|xss_clean');

		if ($this->form_validation->run() == FALSE)
		{
			
			$this->load->view('subscribe_fail');
		}
		else
		{
			$subscriber_data = array(
				'name' => $this->input->post('name'),
        		'email' => $this->input->post('email')
        	);

			$this->load->model('subscribe');
			$status = $this->subscribe->add_subscription($subscriber_data);

			if($status) $this->load->view('subscribe_success');
			else $this->load->view('subscribe_fail',array('error_msg' => 'An Error Occurred, Please try again.'));
		}
	}
}
?>