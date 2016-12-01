<?php
/**
 * Created by PhpStorm.
 * User: yuminchen
 * Date: 2016/11/29
 * Time: 下午11:57
 */

class Main extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');
        $this->load->library('session');
    }

    public function index()
    {
        if($this->session->has_userdata('username'))
        {
            $data['username'] = $_SESSION['username'];
            $this->load->view('main');
        }
        else
        {
            redirect('http://sport:8888/index.php/login');
        }

    }
}
