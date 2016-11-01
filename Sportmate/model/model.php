<?php
/**
 * Created by PhpStorm.
 * User: yuminchen
 * Date: 16/11/1
 * Time: 下午1:55
 */
class Model {
    private $data = array(
        'title' => 'Hello furzoom',
        'welcome' => 'Welcome to furzoom.com',
    );
    public function getData($key) {
        return $this->data[$key];
    }
}