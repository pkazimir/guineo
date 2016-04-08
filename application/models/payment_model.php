<?php

class Payment_model extends CI_Model {

    function getCardTypes()
    {
        
        $this->db->like('type', 2); //2 is type CARDS
        $this->db->from('payment');
        
        $query = $this->db->get();
        
        return $query->result_array();
    }
}

?>