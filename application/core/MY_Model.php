<?php
//to define a MY_Model for model to inherits
class MY_Model extends CI_Model {

    protected $table_name = "";

    //Constructor
    public function __construct(){
        //parent::__construct();
        $this->load->database();
    }

    //SELECT * FROM table LIMIT 0,10
    public function fetch(
        $item_per_page=10, 
        $start_item=0, 
        $where=[], 
        $like=[], 
        $order_by=[]
    ) {

        $this->db->limit($item_per_page, $start_item);

        if(!empty($like)) {
            foreach($like as $k=>$v) {
                $this->db->like($k, $v);
            }
        }

        if(!empty($order_by)) {
            foreach($order_by as $k=>$v) {
                $this->db->order_by($k, $v);
            }
        }
        $this->db->where($where);
        $query = $this->db->get($this->table_name);
        return $query->result_array(); //pass multiple result

    }
    
    public function get_where($where=[], $order_by=[]){

        if(!empty($order_by)) {
            foreach($order_by as $k=>$v) {
                $this->db->order_by($k, $v);
            }
        }

        $this->db->where($where);
        $query = $this->db->get($this->table_name);
        return $query->result_array(); //pass multiple result
        
    }

    public function getOne($where=[], $order_by=[]) {

        if(!empty($order_by)) {
            foreach($order_by as $k=>$v) {
                $this->db->order_by($k, $v);
            }
        }

        $this->db->where($where);
        $query = $this->db->get($this->table_name);
        return $query->row_array(); //pass one result        
    }

    public function insert($insert_array=[]){

        $this->db->insert($this->table_name, $insert_array);

    }

    public function update($where=[], $update_array=[]) {
        $this->db->where($where);
        $this->db->update($this->table_name, $update_array);
    }

    public function delete($where=[]) {
        $this->update($where,[
            'is_deleted' => 1,
            'modified_date' => date("Y-m-d H:i:s"),
        ]);
    }
    public function deleteXmod($where=[]) {
        $this->update($where,[
            'is_deleted' => 1
        ]);
    }

}
?>