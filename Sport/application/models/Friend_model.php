<?php
/**
 * Created by PhpStorm.
 * User: yuminchen
 * Date: 2016/11/29
 * Time: 下午9:02
 */

class Friend_model extends CI_Model {

    public function __construct(){
        $this->load->database();
    }

    public function set_track(){
        $time = time();
        $date = date("Y-m-d",$time);

        $data = array(
            'id' => null,
            'username' => $_SESSION['username'],
            'content' => $this->input->post('content'),
            'pic' => null,
            'creattime' => $date
        );

        $this->db->insert('friend_track',$data);

    }
    public function get_my_track(){

        $query = $this->db->get_where('friend_track', array('username'=>$_SESSION['username']));
        return $query->result_array();
    }

    public function get_track(){

        $query = $this->db->get('friend_track');
        return $query->result_array();
    }



}