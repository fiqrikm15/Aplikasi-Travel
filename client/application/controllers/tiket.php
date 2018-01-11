<?php
class Tiket extends CI_Controller
{
	var $API = "";

	function __construct()
	{
		parent:: __construct();
		$this->API = "http://localhost/travel/server/index.php/tiket";
	}

	function index()
	{
		$data['tiket'] = json_decode($this->curl->simple_get($this->API));

		$session = $this->session->userdata('session');
		$has_session = $session != null;

		
		if($has_session)
			$this->load->view('v_list_tiket', $data);
		else
			redirect('user');
		
		//$this->load->view('v_list_tiket', $data);

	}
}