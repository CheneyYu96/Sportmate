<?php
/**
 * Created by PhpStorm.
 * User: yuminchen
 * Date: 2016/11/29
 * Time: 下午9:02
 */

class Info_model extends CI_Model {

    public function __construct(){
        $this->load->database();
    }

    public function get_info($id){

        $query = $this->db->get_where('user', array('id' => $id));

        return $query->row_array();

    }

    public function modify(){
        $birthday = $this->input->post('birth_year').'-'.$this->input->post('birth_month').'-'.$this->input->post('birth_day');

        $data = array(
            'id' => $_SESSION['id'],
            'username' => $this->input->post('name'),
            'password' => $this->get_info($_SESSION['id'])['password'],
            'birthday' => $birthday,
            'sex' => $this->input->post('sex'),
            'high' => $this->input->post('height'),
            'weight' => $this->input->post('weight'),
            'location' => $this->input->post('province_sel'),
            'photo' => null,
        );

        $this->db->replace('user',$data);
    }

    public function add($data){

        foreach ($data as $data_item){
            $this->db->insert('sport',$data_item);
        }
    }

    public function data($filter){

        $query = $this->db->get_where('sport',$filter);
        return $query->result_array();
    }

}