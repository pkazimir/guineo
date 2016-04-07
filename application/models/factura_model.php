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
            'owner' => $this->getUserId($data['iowner']),
            'created_date' => date("Y-m-d"),
           'created_by' => $this->userid
        );

        $this->db->insert('factura', $data);
        
        return $this->db->insert_id(); 
    }
    
    function setExt($id, $ext)
    {
        $data = array(
               'ext' => $ext
            );

        $this->db->where('fact_id', $id);
        
        return $this->db->update('factura', $data);
    }
}

?>