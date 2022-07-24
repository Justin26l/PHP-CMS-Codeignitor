<?php
class Backend extends MY_Controller {

    public function index(){
        $this->load->view("backend/header", $this->data);
        $this->load->view("backend/index", $this->data);
        $this->load->view("backend/footer", $this->data);
    }

    public function booking(){
        $this->load->model('Booking_model');
        $booklist=$this->Booking_model->get_where($where=['is_deleted'=>0], $order_by=['created_date'=>'DESC']);
        $booklist_is_deleted=$this->Booking_model->get_where($where=['is_deleted'=>1], $order_by=['created_date'=>'DESC']);
        $this->data=['booklist'=>$booklist,'booklist_is_deleted'=>$booklist_is_deleted];

        $this->load->view("backend/header", $this->data);
        $this->load->view("backend/booking", $this->data);
        $this->load->view("backend/footer", $this->data);
    }

    public function booking_deleted($id){
        $this->load->model('Booking_model');
        $this->Booking_model->deleteXmod(['booking_id'=>$id]);

        redirect(base_url('backend/booking'));
    }

    public function contact(){
        $this->load->model('Contact_model');
        $contactlist=$this->Contact_model->get_where($where=['is_deleted'=>0], $order_by=['created_date'=>'DESC']);
        $contactlist_isDeleted=$this->Contact_model->get_where($where=['is_deleted'=>1], $order_by=['created_date'=>'DESC']);
        $this->data=['contactlist'=>$contactlist,'contactlist_is_deleted'=>$contactlist_isDeleted];

        $this->load->view("backend/header", $this->data);
        $this->load->view("backend/contact", $this->data);
        $this->load->view("backend/footer", $this->data);
    }

    public function contact_delete($id){
        $this->load->model('Contact_model');
        $this->Contact_model->deleteXmod(['id'=>$id]);

        redirect(base_url('backend/contact'));
    }

}
?>