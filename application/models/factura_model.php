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
    
    function create_invoice($data)
    {
        $data = array(
           'fact_id' => '',
           'date' => $data['idate'],
           'company' => $data['icompany'],
           'price' => $data['iprice'],
           'tip' => $data['itip'],
           'card' => $data['icard'],
           'comment' => $data['icomment'],
            'owner' => 'pkazimir'
        );

        $this->db->insert('factura', $data);
        
        return $this->db->insert_id(); 
    }
}

?>