<?php
class Login extends CI_Controller {

    //show the login page
    public function index() {

        //to load cookie if exists
        $this->load->helper("cookie");
        $email = get_cookie("myauth_email");
        $pwd = get_cookie("myauth_pwd");

        $this->load->view("login",[
            'email' => $email,
            'pwd'   => $pwd
        ]);
        
    }

    //to receive post request from login form
    public function login_submit() {

        $email      = $this->input->post("email", true);
        $pwd        = $this->input->post("pwd", true);
        $remember   = $this->input->post("remember", true);

        //user want us to remember
        if(!empty($remember)) {

            $this->load->helper("cookie");
            set_cookie("myauth_email", $email, 30*24*3600);
            set_cookie("myauth_pwd", $pwd, 30*24*3600);

        }

        $this->load->model("Admin_model");
        //the check this admin is able to login or not
        $adminData = $this->Admin_model->getOne([
            'email'         => $email,
            'pwd'           => $pwd,
            'is_deleted'    => 0,
        ]);
        //exists, means login successfully
        if(!empty($adminData)) {
            $this->load->library("session"); 
            //give session as a token of login
            $this->session->set_userdata("token", $adminData['name']);
            $this->session->set_userdata("admin_id", $adminData['admin_id']);
            redirect(base_url('backend'));
        //invalid email or password
        } else {
            redirect(base_url('login?invalid=true'));
        }
        
    }

    //to logout and redirect back to login page
    public function logout(){
        $this->load->library("session");
        $this->session->unset_userdata("token");
        redirect(base_url('login'));

    }
    

}
?>