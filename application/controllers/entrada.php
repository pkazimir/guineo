<?php

class Entrada extends MY_Controller {
    
  function index() {
      
      $data['screen'] = 'inbox';
      
      $this->load->view("template", $data);
  }  
}

?>