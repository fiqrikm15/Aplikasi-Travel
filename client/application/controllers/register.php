<?php
/**
 * Created by PhpStorm.
 * User: War Lock
 * Date: 1/10/2018
 * Time: 6:26 PM
 */

class Register extends CI_Controller
{
    var $API = "";
    function __construct()
    {
        parent::__construct();
        $this->API = "http://localhost/travel/server/index.php/user";
    }

    function index()
    {
        $this->load->view('v_register');
    }

    function add_action()
    {
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $telp = $this->input->post('telp');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $umur = $this->input->post('umur');
        $ttl = $this->input->post('ttl');
        $kode_pos = $this->input->post('kode_pos');

        $data = array(
            'nama' => $nama,
            'alamat' => $alamat,
            'telp' => $telp,
            'jenis_kelamin' => $jenis_kelamin,
            'email' => $email,
            'password' =>md5($password),
            'umur' => $umur,
            'ttl' => $ttl,
            'kode_pos' => $kode_pos
        );

        $insert = $this->curl->simple_post($this->API,$data);

        if($insert){
            $message =  "Insert Data Sukses";
        }else{
            $message =  "Insert Data Gagal";
        }

        $this->session->set_flashdata('message', $message);
        redirect("register");
    }
}