<?php
//to define a MY_Controller for backend manage to inherits
class MY_Controller extends CI_Controller {

    protected $data = [];

    public function __construct(){
        parent::__construct();

        $this->load->library("session");
        $token = $this->session->userdata("token");

        if(empty($token)) {
            redirect(base_url('login'));
        }

        $this->data['pagetitle'] = "";
        $this->data['token'] = $token;

    }

}
?>