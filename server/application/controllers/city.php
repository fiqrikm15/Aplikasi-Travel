<?php
/**
 * Created by PhpStorm.
 * User: War Lock
 * Date: 1/3/2018
 * Time: 7:33 AM
 */

require APPPATH . '/libraries/REST_Controller.php';

class City extends REST_Controller
{
    function __construct($config = 'rest')
    {
        parent:: __construct($config);
    }

    function index_get()
    {
        $data = $this->db->get('regencies')->result();
        return $this->response($data, 200);
    }
}