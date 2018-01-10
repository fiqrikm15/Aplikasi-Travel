<?php

class Booking extends CI_Controller
{
	var $API = "";

	function __construct()
	{
		parent:: __construct();

		$this->API = "http://localhost/travel/server/index.php/booking";
	}

	function index()
	{
		$data['kota_asal'] = json_decode($this->curl->simple_get("http://localhost/travel/server/index.php/kota_asal"));
		$data['kota_tujuan'] = json_decode($this->curl->simple_get("http://localhost/travel/server/index.php/kota_tujuan"));
		$this->load->view('v_tiket', $data);
	}
}