<?php

class Factura_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function get_facturas()
    {
    
    $query = $this->db->get('factura');

    return $query->result_array();
    }
}

?>