<?php
/**
 * Created by PhpStorm.
 * User: War Lock
 * Date: 1/3/2018
 * Time: 8:43 AM
 */

require APPPATH . '/libraries/REST_Controller.php';

class User extends REST_Controller
{
    function __construct($config = 'rest')
    {
        parent::__construct($config);
    }

    function index_get()
    {
        $data = $this->db->get('user')->result();
        return $this->response($data, 200);
    }

    function index_post()
    {
        $nama = $this->post('nama');
        $alamat = $this->post('alamat');
        $telp = $this->post('telp');
        $jenis_kelamin = $this->post('jenis_kelamin');
        $email = $this->post('email');
        $password = md5($this->post('password'));
        $umur = $this->post('umur');
        $ttl = $this->post('ttl');
        $kode_pos = $this->post('kode_pos');

        $user = array(
          'nama' => $nama,
          'alamat' => $alamat,
          'telp' => $telp,
          'jenis_kelamin' => $jenis_kelamin,
          'email' => $email,
          'password' => $password,
          'umur' => $umur,
          'ttl' => $ttl,
          'kode_pos' => $kode_pos
        );

        $insert = $this->db->insert('user', $user);

        if($insert)
        {
            $this->response($user,200);
        }
        else
        {
            $data = array('status' => 'Gagal Insert Data');
            $this->response($data, 502);
        }
    }

    function index_put()
    {
        $id = $this->put('id');
        $nama = $this->put('nama');
        $alamat = $this->put('alamat');
        $telp = $this->put('telp');
        $jenis_kelamin = $this->put('jenis_kelamin');
        $email = $this->put('email');
        $password = md5($this->put('password'));
        $umur = $this->put('umur');
        $ttl = $this->put('ttl');
        $kode_pos = $this->put('kode_pos');

        $user = array(
            'nama' => $nama,
            'alamat' => $alamat,
            'telp' => $telp,
            'jenis_kelamin' => $jenis_kelamin,
            'email' => $email,
            'password' => $password,
            'umur' => $umur,
            'ttl' => $ttl,
            'kode_pos' => $kode_pos
        );

        $this->db->where('id', $id);
        $update = $this->db->update('user', $user);

        if ($update) {
            $this->response($user,200);
        }else{
            $data = array('status'=>'Gagal Update Data');
            $this->response($data,502);
        }
    }
}