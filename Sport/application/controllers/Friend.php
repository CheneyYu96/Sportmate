<?php
/**
 * Created by PhpStorm.
 * User: yuminchen
 * Date: 2016/11/29
 * Time: 下午8:31
 */
class Friend extends CI_Controller {

    public function __construct() {
        parent::__construct ();
        $this->load->helper('url_helper');
        $this->load->model('friend_model');
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    public function index() {
        $data['track'] = $this->friend_model->get_track();
        $this->load->view ('friend/index',$data);
    }

    public function track() {
        $this->load->view ('friend/track');
    }

    public function my_track() {
        $data['track'] = $this->friend_model->get_my_track();
        $this->load->view ('friend/my_track',$data);
    }


    public function submit() {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('content', 'content', 'required');
        if ($this->form_validation->run() === FALSE) {
            $this->load->view ('friend/track');
        }
        else {
            $this->friend_model->set_track();
            redirect('http://sport:8888/index.php/friend');
        }
    }

}