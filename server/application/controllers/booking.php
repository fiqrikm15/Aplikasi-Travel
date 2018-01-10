<?php
/**
 * Created by PhpStorm.
 * User: War Lock
 * Date: 1/3/2018
 * Time: 7:36 AM
 */

require APPPATH . '/libraries/REST_Controller.php';

class Booking extends REST_Controller
{
    function __construct($config = 'rest')
    {
        parent:: __construct($config);
    }

    function index_get()
    {
        $data = $this->db->get('pesanan')->result();
        return $this->response($data, 200);
    }

    function index_post()
    {
        $id_user = $this->post('id_user');
        $kota_asal = $this->post('kota_asal');
        $kota_tujuan = $this->post('kota_tujuan');
        $waktu_berangkat = $this->post('waktu_berangkat');
        $no_kursi = $this->post('no_kursi');
        $total_bayar = $this->post('total_bayar');
        $waktu_pesan = date('Y-m-d H:i:s');
        $batas_waktu = date('Y-m-d H:i:s', strtotime('+10 hours'));
        $waktu_pulang = $this->post('waktu_pulang');

        $pesan = array(
            'id_user' => $id_user,
            'kota_asal' => $kota_asal,
            'kota_tujuan' => $kota_tujuan,
            'waktu_berangkat' => $waktu_berangkat,
            'no_kursi' => $no_kursi,
            'total_bayar' => $total_bayar,
            'waktu_pemesanan' => $waktu_pesan,
            'batas_waktu' => $batas_waktu,
            'waktu_pulang' => $waktu_pulang
        );
        $id_pesanan = $this->MBooking->create('pesanan', $pesan);

        $tiket = array(
            'no_tiket' => rand(100000, 20000),
            'id_pesan' => $id_pesanan
        );

        $data = $this->MBooking->create('tiket', $tiket);
    }

    function index_put()
    {
        $id = $this->put('id');
        $id_user = $this->put('id_user');
        $asal_kota = $this->put('asal_kota');
        $kota_tujuan = $this->put('kota_tujuan');
        $waktu_berangkat = $this->put('waktu_berangkat');
        $no_kursi = $this->put('no_kursi');
        $total_bayar = $this->put('total_bayar');
        $waktu_pesan = date('Y-m-d H:i:s');
        $batas_waktu = date('Y-m-d H:i:s', strtotime('+10 hours'));
        $waktu_pulang = $this->put('waktu_pulang');

        $pesan = array(
            'id_user' => $id_user,
            'asal_kota' => $asal_kota,
            'kota_tujuan' => $kota_tujuan,
            'waktu_berangkat' => $waktu_berangkat,
            'no_kursi' => $no_kursi,
            'total_bayar' => $total_bayar,
            'waktu_pemesanan' => $waktu_pesan,
            'batas_waktu' => $batas_waktu,
            'waktu_pulang' => $waktu_pulang
        );

        $this->db->where('id', $id);
        $update = $this->db->update('pesanan', $pesan);

        if ($update) {
            $this->response($pesan,200);
        }else{
            $data = array('status'=>'Gagal Insert Data');
            $this->response($data,502);
        }
    }

    function index_delete()
    {
        $id = $this -> delete('id');
        $pesanan = $this ->db->get_where('pesanan',array('id'=>$id));

        if($pesanan->num_rows()>0)
        {
            $this->db->where('id',$id);
            $this->db->delete('pesanan');

            $data = array( 'status'=>'Berhasil delete dengan ID: '.$id);
            $this->response($data,200);
        }
        else
        {
            $data = array( 'status'=>'Data dengan ID: '.$id . ' Tidak Ditemukan');
            $this->response($data,200);
        }
    }
}