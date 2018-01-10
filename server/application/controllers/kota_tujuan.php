<?php
/**
 * Created by PhpStorm.
 * User: War Lock
 * Date: 1/3/2018
 * Time: 10:54 AM
 */

require APPPATH . '/libraries/REST_Controller.php';

class Kota_tujuan extends REST_Controller
{
    function __construct($config = 'rest')
    {
        parent::__construct($config);
    }

    function index_get()
    {
        $condition = "province_id = 32";
        $this->db->where($condition);
        $data = $this->db->get('Kota_tujuan')->result();
        return $this->response($data, 200);
    }
}