<?php
error_reporting(E_ALL);

session_start();

require_once 'core/controller.php';
require_once 'core/model.php';
require_once 'core/system.php';
require_once 'core/core.php';

require_once 'core/view.php';

$original_route = $_SERVER['REQUEST_URI'];

$url = explode('/', $original_route);

$controller_name = controller_name($url[2]);

if($controller_name === 'NewsController') {
    $controller_name = 'NewsController';
}
else $controller_name = 'Controller';
$controller = new $controller_name($url);

$controller->result();
