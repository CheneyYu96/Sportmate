<?php
/**
 * Created by PhpStorm.
 * User: yuminchen
 * Date: 16/11/1
 * Time: 上午10:09
 */

$c_str = $_GET['c'];
// the full name of controller
$c_name = $c_str.'Controller';
// the path of controller
$c_path = 'controller/'.$c_name.'.php';
require_once($c_path);
// get runtime action
$method = $_GET['a'];
// get runtime parameter
$param = $_GET['param'];

// instantiate controller
$controller = new $c_name;
// run the controller  method
$controller->$method($param);
// End of index.php