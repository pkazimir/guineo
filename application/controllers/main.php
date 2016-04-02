<?php

class Main extends CI_Controller {

	public function index()
	{   
        $this->load->model('Factura_model');
        
        $data['fact_list'] = $this->Factura_model->get_facturas();
        $data['screen'] = 'list';
        
		$this->load->view('template', $data);
    }
    
    function add() {
        
        $data['screen'] = 'add';
        
		$this->load->view('template', $data);
    }
    
    private function header() {
        $this->load->view('header');
    }
    
    private function footer() {
        $this->load->view('footer');
    }
}

?>