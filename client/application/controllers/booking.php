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

		$session = $this->session->userdata('session');
		$has_session = $session != null;

		if($has_session)
			$this->load->view('v_tiket', $data);
		else
			redirect('user');
	}

	function add_action()
	{
		$id_user = $this->input->post('id_user');

		$kota_asal = $this->input->post('kota_asal');
		$kota_tujuan = $this->input->post('kota_tujuan');

		$tanggal_berangkat = $this->input->post('tgl_berangkat');
		$jam_berangkat = $this->input->post('jam_berangkat');
		$menit_berangkat = $this->input->post('menit_berangkat');

		$tanggal_pulang = $this->input->post('tgl_pulang');
		$jam_pulang = $this->input->post('jam_pulang');
		$menit_pulang = $this->input->post('menit_pulang');

		$waktu_berangkat = $tanggal_berangkat." ".$jam_berangkat.":".$menit_berangkat.":00";

		$waktu_pulang = $tanggal_pulang." ".$jam_pulang.":".$menit_berangkat.":00";

		$no_kursi = $this->input->post('no_kursi');
		$paket = $this->input->post('paket');

		if($paket == 1)
		{
			$total_bayar = "250000";
		}
		else if($paket == 2)
		{
			$total_bayar = "300000";
		}
		else if($paket = 3)
		{
			$total_bayar = "450000";
		}

		$data = array(
			'id_user' => $id_user,
			'kota_asal' => $kota_asal,
			'kota_tujuan' => $kota_tujuan,
			'waktu_berangkat' => $waktu_berangkat,
			'waktu_pulang' => $waktu_berangkat,
			'no_kursi' => $no_kursi,
			'total_bayar' => $total_bayar
		);

		$insert = $this->curl->simple_post($this->API,$data);

        if($insert){
            $message =  "Insert Data Sukses";
        }else{
            $message =  "Insert Data Gagal";
        }

        $this->session->set_flashdata('message', $message);
        redirect("booking");
	}
}