<?php

require './Models/Model.php';
require './Models/User.php';
require './Models/Family.php';
require './Models/Product.php';

$moduleName = $_GET['module'] ?? null;
$actionName = $_GET['action'] ?? 'index';

if ($moduleName != 'auth' && empty($_SESSION['user'])) {
    header('location:index.php?module=auth&action=login');
}

if (($actionName == 'login' || $moduleName == 'auth') && !empty($_SESSION['user'])) {
    header('location:index.php?module=product');
}


switch ($moduleName) {
    case 'product':
        if ($actionName == 'create') {
            require './Views/products/form.php';
        } else {
            require './Views/products/index.php';
        }

        break;

    case 'upload':
        require './Views/upload/process_upload.php';
        require './Views/upload/form.php';
        break;

    case 'category':
        require "./Views/categories/{$actionName}.php";
        break;
    case 'order': 
        require './Views/orders/index.php';
        break;

    case 'user':
        $userModel = new User;
        $users = $userModel->getAll();

        $data = [
            'name' => 'Nguyen Van C',
            'email' => 'cccc@gmail.com',
        ];

        $newArray = array_map(function($item) {
            return '"' . $item . '"';
        }, $data);

        echo '<pre>';
        print_r($data);
        print_r($newArray);
        echo '</pre>';

        require './Views/users/user.php';
        require "./Views/users/{$actionName}.php";
        break;

    case 'auth':
        if ($actionName == 'login') {
            require './Views/auth/process_login.php';
            require './Views/auth/login.php';
        }

        if ($actionName == 'logout') {
            require './Views/auth/logout.php';
        }

        break;
}

?>