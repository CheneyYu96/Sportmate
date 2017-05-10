<?php
/**
 * Created by PhpStorm.
 * User: yuminchen
 * Date: 2016/11/29
 * Time: 下午8:31
 */
class Login extends CI_Controller {

    public function __construct() {
        parent::__construct ();
        $this->load->helper ( array (
            'form',
            'url'
        ) );
        $this->load->model('login_model');
        $this->load->library('session');

    }
    public function index() {
        $this->load->view ('login');
        $this->load->view ('login_in');
    }
    public function submit() {
        $this->load->library ('form_validation');

        $this->form_validation->set_rules ( 'username', 'Username', 'required' );
        $this->form_validation->set_rules ( 'password', 'Password', 'required' );
        if ($this->form_validation->run () == FALSE) {
            $this->load->view ('login');
            $this->load->view ('login_in');
        } else {
            $data = array (
                'user' => $_POST ['username'],
                'pass' => $_POST ['password']
            );

            $result = $this->login_model->login (array (
                'username' => $data ['user'],
                'password' => $data ['pass']
            ));

            if ($result) {
                $newdata = array(
                    'username'  =>  $data ['user'] ,
                    'userip'     => $_SERVER['REMOTE_ADDR'],
                    'luptime'   => time(),
                    'id'       => $result
                );
                $this->session->set_userdata($newdata);
                redirect('http://sport:8888/index.php/main');
            }
            else{
                $this->session->sess_destroy();
                $this->load->view ('login');
                $this->load->view ('login_in');
            }

        }

    }

    public function register() {
        $this->load->view ('login');
        $this->load->view ('login_register');
    }

    public function register_submit() {

        $this->load->library ('form_validation');

        $this->form_validation->set_rules ( 'username', 'Username', 'required' );
        $this->form_validation->set_rules ( 'password', 'Password', 'required' );
        $this->form_validation->set_rules ( 'passwordagain', 'Password again', 'required' );
        if ($this->form_validation->run () == FALSE
            ||$_POST ['password']!=$_POST ['passwordagain']
            ||!preg_match("/^[a-zA-Z0-9]{6,15}$/",$_POST ['password'])) {

            $this->load->view ('login');
            $this->load->view ('login_register');

        } else {

            $data = array(
                'username' => $_POST ['username'],
                'password' => $_POST ['password']
            );
            $this->login_model->register($data);
            redirect('http://sport:8888/index.php/login');

        }
    }
}