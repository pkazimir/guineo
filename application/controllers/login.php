<?php

class Login extends CI_Controller {
    
  function index() {
      
      echo "access denied.";
  }
    
    function denied() {
        
        $this->load->view('denied');
    }
}

?>