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
        $data = $this->db->get('tiket')->result();
        return $this->response($data, 200);
    }
}