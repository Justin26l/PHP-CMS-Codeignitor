<?php
class Menu_manage extends MY_Controller {

    public function index(){

        $this->load->model("Menu_model");
        $menu = $this->Menu_model->get_where(['is_deleted'=>0]);

        $menuList=[];
        foreach($menu as $v){
            if (substr($v['image'],0,4)!='http'){
                $v['image']=base_url($v['image']);
            }
            array_push($menuList,$v);
        };

        $this->data['menuList'] = $menuList;
        
        $this->load->view("backend/header", $this->data);
        $this->load->view("backend/menu_list", $this->data);
        $this->load->view("backend/footer", $this->data);

    }

    public function menu_submit(){

        $title = $this->input->post("title", true);
        $description = $this->input->post("description", true);
        $menu_type = $this->input->post("menu_type", true);
        $image = $this->input->post("image", true);
        $price = $this->input->post("price", true);
        
        $this->load->model("Menu_model");

        $this->Menu_model->insert([
            'title' => $title,
            'description' => $description,
            'menu_type' => $menu_type,
            'image'  => $image,
            'price'  => $price,            
            'created_date' => date("Y-m-d H:i:s"),
        ]);

        redirect(base_url('backend/menu'));
    }

    public function add(){

        $this->load->view("backend/header", $this->data);
        $this->load->view("backend/menu_add", $this->data);
        $this->load->view("backend/footer", $this->data);

    }

    public function edit($menu_id){

        $this->load->model("Menu_model");
        //SELECT * FROM booking WHERE booking_id = '$booking_id'
        $menuDetail = $this->Menu_model->getOne([
            'menu_id' => $menu_id
        ]);

        $this->data['menuDetail'] = $menuDetail;

        $this->load->view("backend/header", $this->data);
        $this->load->view("backend/menu_edit", $this->data);
        $this->load->view("backend/footer", $this->data);

    }

    public function menu_update(){

        $menu_id = $this->input->post("menu_id", true);
        $title = $this->input->post("title", true);
        $description = $this->input->post("description", true);
        $menu_type = $this->input->post("menu_type", true);
        $image = $this->input->post("image", true);
        $price = $this->input->post("price", true);
        
        $this->load->model("Menu_model");

        $this->Menu_model->update([
            'menu_id' => $menu_id
        ],[
            'title' => $title,
            'description' => $description,
            'menu_type' => $menu_type,
            'image'  => $image,
            'price'  => $price,            
            'modified_date' => date("Y-m-d H:i:s"),
        ]);

        redirect(base_url('backend/menu'));


    }

    public function delete($menu_id=0){

        $this->load->model("Menu_model");

        $this->Menu_model->delete([
            'menu_id' => $menu_id
        ]);
        redirect(base_url('backend/menu'));

    }

}
?>