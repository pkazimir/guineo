<?php

class Card_model extends CI_Model {

    
    function getCards($userid) {
        
        $query = $this->db->query('SELECT c.number, p.name FROM card c, payment p WHERE c.payment_id = p.payment_id AND p.type = 2 AND c.user_id = '.$userid);
        
        return $query->result_array();
    }
    
    function saveCard($cardInfo) {
        
        $data = array(
            'user_id' => $cardInfo['user_id'] ,
            'number' => $cardInfo['card_num'] ,
            'payment_id' => $cardInfo['card_type']
        );

        if ($this->db->insert('card', $data))
            return true;
    }
}

?>