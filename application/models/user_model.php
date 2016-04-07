<?php

class User_model extends CI_Model {
    
    function getUser($idToCheck, $usernameToCheck) {
        
        $this->db->like('username', $usernameToCheck);
        $this->db->like('user_id', $idToCheck);
        $this->db->from('user');
        
        $result = $this->db->get();
        
        return $result->row();
    }
    
    function getUserId($username) {
        
        $this->db->like('username', $username);
        $this->db->from('user');
        
        $result = $this->db->get();
        
        $row = $result->row();
        
        return $row->user_id;
    }
}

?>