<?php
/**
 * Created by PhpStorm.
 * User: yuminchen
 * Date: 2016/11/29
 * Time: 下午1:34
 */
class Activity extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('sport_model');
        $this->load->helper('url_helper');
        $this->load->library('session');

    }

    public function checkLogin(){
        if(!isset($_SESSION['username'])){
            redirect('http://sport:8888/index.php/login');
        }
    }

    public function index()
    {

        $this->checkLogin();
        $data['activity'] = $this->sport_model->get_activity();

        $data['title'] = '活动列表';

        $this->load->view('templates/header', $data);
        $this->load->view('activity/index', $data);

    }

    public function view($id = NULL){
        $this->checkLogin();

        $data['activity_item'] = $this->sport_model->get_activity($id);

        if (empty($data['activity_item']))
        {
            show_404();
        }

        $data['title'] = $data['activity_item']['name'];
        $this->load->view('templates/header', $data);
        $this->load->view('activity/view', $data);
        $this->load->view('activity/view_join', $data);
    }

    public function view_mine($id = NULL){
        $this->checkLogin();

        $data['activity_item'] = $this->sport_model->get_activity($id);

        if (empty($data['activity_item']))
        {
            show_404();
        }

        $data['title'] = $data['activity_item']['name'];
        $this->load->view('templates/header', $data);
        $this->load->view('activity/view', $data);
        $this->load->view('activity/view_unjoin', $data);
    }


    public function view_minecreate($id = NULL){
        $this->checkLogin();

        $data['activity_item'] = $this->sport_model->get_activity($id);

        if (empty($data['activity_item']))
        {
            show_404();
        }

        $data['title'] = $data['activity_item']['name'];
        $this->load->view('templates/header', $data);
        $this->load->view('activity/view', $data);
        $this->load->view('activity/view_delete', $data);
    }

    public function create(){
        $this->checkLogin();

        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = '创建活动';

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('text', 'Text', 'required');
        $this->form_validation->set_rules('limitnum', 'limitnum', 'required');
        $this->form_validation->set_rules('location', 'location', 'required');


        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('activity/create');

        }
        else {
            $this->sport_model->set_activity();
            redirect('http://sport:8888/index.php/activity');
        }
    }

    public function join($id=null){

        $this->checkLogin();

        $result = $this->sport_model->join_activity($_SESSION['id'], $id);

        if (!$result) {
            $this->load->view('activity/fail');
        }
        else {
          redirect('http://sport:8888/index.php/activity');
        }

    }

    public function unjoin($id=null){

        $this->checkLogin();

        $result = $this->sport_model->unjoin_activity($_SESSION['id'], $id);

        if (!$result) {
            $this->load->view('activity/fail');
        }
        else {
            redirect('http://sport:8888/index.php/mine');
        }

    }

    public function delete($id=null){

        $this->checkLogin();

        $result = $this->sport_model->delete_activity($id);

        if (!$result) {
            $this->load->view('activity/fail');
        }
        else {
            redirect('http://sport:8888/index.php/mine/create');
        }

    }

    public function filter(){
        $mold = $_POST['mold'];
        $type = $_POST['type'];
        $state= $_POST['state'];

        $filter = array();

        if($mold>0){
            array_push($filter,array('mold'=>$mold));
        }
        if($type>0){
            array_push($filter,array('type'=>$type));
        }
        if($state>0){
            array_push($filter,array('state'=>$state));
        }

        $data['activity'] = $this->sport_model->get_activity()[0];

        $data['title'] = '活动列表';
        $data['mold'] = $mold;
        $data['type'] = $type;
        $data['state'] = $state;

        $this->load->view('templates/header', $data);
        $this->load->view('activity/index', $data);
    }

    public function mine(){

        $data['activity'] = $this->sport_model->get_my_activity($_SESSION['id']);
        $this->load->view('activity/mine',$data);
        $this->load->view('activity/mine_join',$data);
    }

    public function mine_create(){

        $data['activity'] = $this->sport_model->get_my_create_activity($_SESSION['username']);
        $this->load->view('activity/mine',$data);
        $this->load->view('activity/mine_create',$data);
    }
}