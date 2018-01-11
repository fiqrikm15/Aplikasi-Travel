<?php

class User extends CI_Controller
{
	var $API = "";

	function __construct()
	{
		parent:: __construct();
		$this->API = "http://localhost/travel/server/index.php/login";
	}

	function index()
	{
		$this->load->view('v_login');
	}

	function login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$data=array();

		if(isset($email))
		{
			$params = array(				
				'email' 	 => $email,
				'password' 	 => $password
			);

			$data['result'] = json_decode($this->curl->simple_post($this->API,$params));

			if($data['result']->user != null)
			{
				$this->session->set_userdata('session',$data['result']->user[0]);
				redirect ('booking');
			}
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('session');
		redirect('user');
	}
}