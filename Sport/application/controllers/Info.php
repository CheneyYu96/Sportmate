<?php
/**
 * Created by PhpStorm.
 * User: yuminchen
 * Date: 2016/11/29
 * Time: 下午8:31
 */
class Info extends CI_Controller {

    public function __construct() {
        parent::__construct ();
        $this->load->helper('url_helper');
        $this->load->model('info_model');
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }
    public function index() {

        $data['info'] = $this->info_model->get_info($_SESSION['id']);

        $this->load->view ('info/info',$data);

    }

    public function modify() {

        $this->form_validation->set_rules('name', 'Name', 'required');

        if ($this->form_validation->run() === FALSE) {
        }
        else {
            $this->info_model->modify();
        }
        redirect('http://sport:8888/index.php/info');


    }

    public function getamount($arry) {
        $sum = 0;
        foreach ($arry as $arr){
            $sum += $arr['amount'];
        }
        return $sum;
    }

    public function minedata() {


        $data['line'] = array(
            '周一' =>  $this->getamount($this->info_model->data(array('userid'=>$_SESSION['id'],'date'=>'周一'))),
            '周二'=> $this->getamount($this->info_model->data(array('userid'=>$_SESSION['id'],'date'=>'周二'))),
            '周三'=> $this->getamount($this->info_model->data(array('userid'=>$_SESSION['id'],'date'=>'周三'))),
            '周四'=> $this->getamount($this->info_model->data(array('userid'=>$_SESSION['id'],'date'=>'周四'))),
            '周五'=> $this->getamount($this->info_model->data(array('userid'=>$_SESSION['id'],'date'=>'周五'))),
            '周六'=> $this->getamount($this->info_model->data(array('userid'=>$_SESSION['id'],'date'=>'周六'))),
            '周日'=> $this->getamount($this->info_model->data(array('userid'=>$_SESSION['id'],'date'=>'周日')))
        );

        $data['pie1'] = array(
            '球类' => $this->getamount($this->info_model->data(array('userid'=>$_SESSION['id'],'type'=>'球类'))),
            '骑行'=> $this->getamount($this->info_model->data(array('userid'=>$_SESSION['id'],'type'=>'骑行'))),
            '登山'=> $this->getamount($this->info_model->data(array('userid'=>$_SESSION['id'],'type'=>'登山'))),
            '游泳'=> $this->getamount($this->info_model->data(array('userid'=>$_SESSION['id'],'type'=>'游泳'))),
            '跑步'=> $this->getamount($this->info_model->data(array('userid'=>$_SESSION['id'],'type'=>'跑步'))),
            '健身'=> $this->getamount($this->info_model->data(array('userid'=>$_SESSION['id'],'type'=>'健身'))),
        );
        $data['pie2'] = array(
            '0' => $this->getamount($this->info_model->data(array('userid'=>$_SESSION['id'],'time'=>4))),
            '1'=> $this->getamount($this->info_model->data(array('userid'=>$_SESSION['id'],'time'=>8))),
            '2'=> $this->getamount($this->info_model->data(array('userid'=>$_SESSION['id'],'time'=>12))),
            '3'=> $this->getamount($this->info_model->data(array('userid'=>$_SESSION['id'],'time'=>16))),
            '4'=> $this->getamount($this->info_model->data(array('userid'=>$_SESSION['id'],'time'=>20))),
        );

        $this->load->view ('info/minedata', $data);
    }

    public function adddata(){
        $sport_data = array();

        $week = array('周一','周二','周三','周四','周五','周六','周日');
        $type = array('球类','骑行','健身','登山','游泳','跑步');

        for($index = 0; $index<1000;$index++){

            $userid = mt_rand(1,5);
            $weekIndex = mt_rand(0,6);
            $typeIndex = mt_rand(0,5);

            $sport_item = array(
                'id' => null,
                'userid'=>$userid,
                'date' =>$week[$weekIndex],
                'type'=> $type[$typeIndex],
                'time'=>mt_rand(1,24),
                'amount'=> mt_rand(100,300)
            );

            array_push($sport_data, $sport_item);

        }
        $this->info_model->add($sport_data);
    }

}