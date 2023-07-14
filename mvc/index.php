<?php

require './Common/Autoload.php';
require './Common/Helper.php';
require './Controllers/UserController.php';

$controllerName = ucfirst(($_GET['controller'] ?? 'Home') . 'Controller');
$actionName = $_GET['action'] ?? 'index';

$controller = new $controllerName;

$controller->$actionName();
