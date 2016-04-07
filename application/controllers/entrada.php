<?php

class Entrada extends MY_Controller {
    
    function index() {
        
        $this->load->model('Factura_model');
        
        $data['fact_list'] = $this->Factura_model->get_facturas();
        $data['screen'] = 'inbox';
      
        $this->load->view("template", $data);
    }  
}

?>