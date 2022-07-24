<?php
class Frontend extends CI_Controller {

    public function index(){
        $this->load->model('Menu_model');
        $this->load->model('Chef_model');
        $this->load->model('Gallery_model');
        $this->load->model('Testimonial_model');

        $menuList = $this->Menu_model->get_where(['is_deleted'=>0]);
        $chefList = $this->Chef_model->get_where(['is_deleted'=>0]);
        $galleryList = $this->Gallery_model->get_where(['is_deleted'=>0]);
        $testimonialList = $this->Testimonial_model->get_where(['is_deleted'=>0]);

        $this->load->view('home',[
            "menulist"=>$menuList,
            "chefList"=>$chefList,
            "galleryList"=>$galleryList,
            "testimonialList"=>$testimonialList
            ]
        );
    }

    public function booking(){
        $this->load->model('Booking_model');
        $dataPost=$this->input->post(NULL,TRUE);

        $Booking=$this->Booking_model->insert([
            'name'=>$dataPost['name'],
            'email'=>$dataPost['email'],
            'phone'=>$dataPost['phone'],
            'date'=>$dataPost['date'],
            'time'=>$dataPost['time'],
            'people'=>$dataPost['people'],
            'message'=>$dataPost['message'],
            'is_deleted'=>0,
            'created_date'=>date("Y-m-d h:i:s "),
        ]);
        echo '<br><br><h1 style="text-align:center;">Thanks For Your Booking !</h1><p> We Will send u an email confirmation soon ~ </p>';
    }

    public function contact(){
        $this->load->model('Contact_model');
        $dataPost=$this->input->post(NULL,TRUE);

        $Contact=$this->Contact_model->insert([
            'name'=>$dataPost['name'],
            'mail'=>$dataPost['email'],
            'subject'=>$dataPost['subject'],
            'message'=>$dataPost['message'],
            'created_date'=>date("Y-m-d h:i:s "),
            'is_deleted'=>0
        ]);
        echo '<br><br><h1 style="text-align:center;">Thanks For Your Contact !</h1><p style="text-align:center;"> We Will send u an email Reply soon ~ </p>';
    }

    public function login(){
        $this->load->model('admin_model');
        $Post=$this->input->post(NULL,TRUE);

        $Valid=$this->admin_model->getOne(['email'=>$Post['email'],'pwd'=>$Post['pwd']]);

        if(!$Valid){
            echo '<h1 style="text-align:center;"> User Unvalid </h1>';
        }
        else{
            $this->load->library("session");
            $this->session->set_userdata('token',$Valid['name']);
            echo 'User Valid'.$Valid['name'];
            redirect('/backend');
        }
    }
}
?>