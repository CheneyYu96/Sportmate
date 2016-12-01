<?php
/**
 * Created by PhpStorm.
 * User: yuminchen
 * Date: 2016/11/29
 * Time: 下午1:27
 */
class Sport_model extends CI_Model {

    public function __construct(){
        $this->load->database();
    }

    public function get_activity($id = FALSE){
        if ($id === FALSE) {
            $query = $this->db->get('activity');
            return $query->result_array();
        }

        $query = $this->db->get_where('activity', array('id' => $id));
        return $query->row_array();
    }

    public function get_my_activity($id = FALSE){
        if ($id === FALSE) {
            return false;
        }

        $result = array();

        $query = $this->db->get_where('activity_joiner', array('userid' => $id));

        foreach ($query->result() as $row) {
            $result_row = $this->db->get_where('activity', array('id' => $row->activityid));
            array_push($result, $result_row->row_array());
        }

        return $result;
    }

    public function get_my_create_activity($username = FALSE){
        if ($username === FALSE) {
            return false;
        }

        $query = $this->db->get_where('activity', array('holdername' => $username));

        return $query->result_array();
    }

    public function set_activity(){
        $this->load->helper('url');

        $time = time();
        $date = date("Y-m-d",$time);
        $data = array(
            'id' => null,
            'holdername' => $_SESSION['username'],
            'name' => $this->input->post('name'),
            'content' => $this->input->post('text'),
            'mold' => $this->input->post('mold'),
            'type' => $this->input->post('type'),
            'creattime' => $date,
            'begintime' => $date,
            'endtime' => $date,
            'limitnum'=> $this->input->post('limitnum'),
            'state' => '进行中',
            'location' =>  $this->input->post('location'),
        );

        return $this->db->insert('activity', $data);
    }

    public function join_activity($user_id,$activity_id){

        if($user_id==false||$activity_id==false){
            return false;
        }

        $data = array(
            'activityid' => $activity_id,
            'userid' => $user_id,
        );

        $query = $this->db->get_where('activity_joiner', $data);

        if(empty($query->row()->userid)){
            return $this->db->insert('activity_joiner', $data);
        }
        else{
            return false;
        }

    }

    public function unjoin_activity($user_id,$activity_id){

        if($user_id==false||$activity_id==false){
            return false;
        }

        $data = array(
            'activityid' => $activity_id,
            'userid' => $user_id,
        );

        $query = $this->db->get_where('activity_joiner', $data);

        if(empty($query->row()->userid)){
            return false;
        }
        else{
            return $this->db->delete('activity_joiner',$data);
        }

    }

    public function delete_activity($activity_id){

        if($activity_id==false){
            return false;
        }

        return $this->db->delete('activity',array('id' => $activity_id));

    }

}