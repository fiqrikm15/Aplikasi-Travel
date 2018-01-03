<?php
/**
 * Created by PhpStorm.
 * User: War Lock
 * Date: 1/3/2018
 * Time: 7:37 AM
 */

class MBooking extends CI_Model
{
    function create($table, $data)
    {
        $query = $this->db->insert($table, $data);
        return $this->db->insert_id();
    }
}