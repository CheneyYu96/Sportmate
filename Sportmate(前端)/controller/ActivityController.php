<?php
/**
 * Created by PhpStorm.
 * User: yuminchen
 * Date: 16/11/1
 * Time: 下午1:56
 */
class ActivityController{

    function index($param){

        // echo 'hello world';
        require('../view/activities.php');
        require('../model/Model.php');
        $model = new Model();
        $view = new Index();
        $data = $model->getData($param);
        $view->display($data);
    }
}