<?php
class Testimonial_manage extends MY_Controller {

    public function index(){

        $this->load->model("Testimonial_model");
        $testimonial = $this->Testimonial_model->get_where(['is_deleted'=>0]);

        $testimonialList=[];
        foreach($testimonial as $v){
            if (substr($v['img'],0,4)!='http'){
                $v['img']=base_url($v['img']);
            }
            array_push($testimonialList,$v);
        };

        $this->data['testimonialList'] = $testimonialList;
        
        $this->load->view("backend/header", $this->data);
        $this->load->view("backend/testimonial_list", $this->data);
        $this->load->view("backend/footer", $this->data);

    }

    public function testimonial_submit(){

        $testimonial = $this->input->post(NULL, true);
        
        $this->load->model("Testimonial_model");

        $this->Testimonial_model->insert([
            'name'    => $testimonial['name'],
            'work'    => $testimonial['work'],
            'message' => $testimonial['message'],
            'img'     => $testimonial['img']
        ]);

        redirect(base_url('backend/testimonial'));


    }

    public function add(){

        $this->load->view("backend/header", $this->data);
        $this->load->view("backend/testimonial_add", $this->data);
        $this->load->view("backend/footer", $this->data);

    }

    public function edit($id){

        $this->load->model("Testimonial_model");
        //SELECT * FROM booking WHERE booking_id = '$booking_id'
        $testimonialDetail = $this->Testimonial_model->getOne([
            'id' => $id
        ]);

        $this->data['testimonialDetail'] = $testimonialDetail;

        $this->load->view("backend/header", $this->data);
        $this->load->view("backend/testimonial_edit", $this->data);
        $this->load->view("backend/footer", $this->data);

    }

    public function testimonial_update(){

        $POST= $this->input->post(NULL, true);
        
        $this->load->model("Testimonial_model");

        $this->Testimonial_model->update([
            'id' => $POST['id']
        ],[
            'name' => $POST['name'],
            'work' => $POST['work'],
            'message' => $POST['message'],
            'img'  => $POST['img']
        ]);

        redirect(base_url('backend/testimonial'));


    }

    public function delete($id){

        $this->load->model("Testimonial_model");

        $this->Testimonial_model->deleteXmod([
            'id' => $id
        ]);
        redirect(base_url('backend/testimonial'));

    }

}
?>