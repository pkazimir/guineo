<?php

class Perfil extends MY_Controller {
    
  function index() {
      
      $this->load->model('card_model');
      
      $data['card'] = $this->card_model->getCards($this->userid);
      $data['screen'] = 'profile';
        
      $this->load->view('template', $data);
  }  
}

?>