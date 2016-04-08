<?php

class Perfil extends MY_Controller {
    
  function index() {
      
      $this->load->model('card_model');
      $this->load->model('payment_model');
      
      $data['card_type'] = $this->payment_model->getCardTypes();
      $data['card'] = $this->card_model->getCards($this->userid);
      $data['screen'] = 'profile';
        
      $this->load->view('template', $data);
  }
    
    public function anadirTarjeta(){
        
        $this->load->model("card_model");
        
        $cardInfo = array(
                        "user_id" => $this->userid,
                        "card_num" => $this->input->post('icardnumber'),
                        "card_type" => $this->input->post('icardtype'));
        
        if ($this->card_model->saveCard($cardInfo))
            return true;
        else
            return false;
    }
    
    public function borrarTarjeta(){
        return true;
    }
}

?>