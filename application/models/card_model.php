<?php

class Card_model extends CI_Model {

    
    function getCards($userid) {
        
        $query = $this->db->query('SELECT c.number, p.type FROM card c, payment p WHERE c.payment_id = p.payment_id AND c.user_id = '.$userid);
        
        return $query->result_array();
    }
}

?>