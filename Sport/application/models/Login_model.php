<?php
/**
 * Created by PhpStorm.
 * User: yuminchen
 * Date: 2016/11/29
 * Time: 下午9:02
 */

class Login_model extends CI_Model {

    public function __construct(){
        $this->load->database();
    }

    public function login($user){

        $query = $this->db->get_where('user', array('username' => $user['username']));

        foreach ($query -> result() as $row){
            if($row->password ==$user['password']) {
                return $row->id;
            }
        }
        return false;

    }

    public function register($user){
        $this->db->insert('user',$user);
    }



}