<?php

class MY_Controller extends CI_Controller {

    // 1 = pkazimir
    // 2 = aaguero
    // 3 = kgarcia
    
    public $userid = 1;
    public $username = "pkazimir";
    
    
    public function __construct()
    {
        parent::__construct();
        
        if (!$this->_checkIfLogged($this->userid, $this->username)) {
            redirect(base_url().'login/');
        }
    }
    
    public function _checkIfLogged($idToCheck, $usernameToCheck) {
        
        $this->load->vars(array("username" => $this->username,
                              "userid" => $this->userid));
        
        $this->load->model('user_model');
        
        if ($this->user_model->getUser($idToCheck, $usernameToCheck))
            return true;
        else
            return false;
    }
}

?>