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
	}

	function detail()
	{
		$id = $this->uri->segment(3);

		$data['id'] = $id;
		$data['tiket'] = json_decode($this->curl->simple_get($this->API));

		$this->load->view('v_detail', $data);
	}

	function delete()
	{
		$id = $this->uri->segment(3);
    	$data = array('id'=>$id);
    	$delete = $this->curl->simple_delete($this->API,$data);
		
		if($delete){
			echo "Hapus Data Sukses";
		}else{
			echo "Hapus Data Gagal";
		}
		$this->session->set_flashdata('message',$message);
        redirect('tiket');
	}
}