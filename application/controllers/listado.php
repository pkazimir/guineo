<?php

class Listado extends MY_Controller {
    
	public function index()
	{       
        $this->load->model('Factura_model');
        
        $data['fact_list'] = $this->Factura_model->get_facturas();
        $data['screen'] = 'list';
        
		$this->load->view('template', $data);
    }
}

?>