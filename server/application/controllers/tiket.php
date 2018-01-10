<?php
/**
 * Created by PhpStorm.
 * User: War Lock
 * Date: 1/3/2018
 * Time: 10:54 AM
 */

require APPPATH . '/libraries/REST_Controller.php';

class Tiket extends REST_Controller
{
    function __construct($config = 'rest')
    {
        parent::__construct($config);
    }

    function index_get()
    {
        //$data = $this->db->get('tiket')->result();

        $this->db->select('pesanan.*, tiket.no_tiket, user.nama, kota_asal.kota_asal, kota_tujuan.kota_tujuan');
        $this->db->from('pesanan');
        $this->db->join('tiket', 'tiket.id_pesan = pesanan.id');
        $this->db->join('user', 'user.id = pesanan.id_user');
        $this->db->join('kota_asal', 'kota_asal.id = pesanan.kota_asal');
        $this->db->join('kota_tujuan', 'kota_tujuan.id = pesanan.kota_tujuan');
        $data = $this->db->get()->result();

        return $this->response($data, 200);
    }
}