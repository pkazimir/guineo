<?php

class Nuevo extends MY_Controller {
    
	public function index()
	{       
        $this->load->model('Factura_model');
        
        $data['screen'] = 'add';
        
        if ($postData = $this->input->post('icomment'))
            if ($factId = $this->Factura_model->create_invoice($this->input->post()))
            {
                $doUpload = $this->upload($factId);
                $setExt = $this->Factura_model->setExt($factId, $this->upload->data('image_type'));
                
                if ($doUpload && $setExt)
                    $data['insertStatus'] = 'success';
                else
                    $data['insertStatus'] = 'failed';
            }
            else
                $data['insertStatus'] = 'failed';
        
		$this->load->view('template', $data);
    }
    
    function upload($id) {
        
        $config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'jpeg|jpg|png|pdf';
		$config['max_size']	= '0';
		$config['max_width']  = '0';
		$config['max_height']  = '0';
		$config['file_name']  = $id;

		$this->load->library('upload', $config);
        
        if ($this->upload->do_upload())
			return true;
		else
			return false;
    }
}

?>