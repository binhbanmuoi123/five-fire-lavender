<?php
    include_once 'views/header.php';
    // include_once 'views/update_pr.php';
    // include_once 'views/admins.php';
    // include_once 'views/messages.php';
    // include_once 'views/orders.php';
    // include_once 'views/products.php';
    $page=isset($_GET['trang']) ? $_GET['trang'] : 'index';

    switch ($page){
        case 'index':
            include_once 'views/home.php';
            break;
        case 'products':
            include_once 'views/products.php';
            break;
        case 'users':
            include_once 'views/users.php';
            break;
        case 'admins':
            include_once 'views/admins.php';
            break;
        case 'orders':
            include_once 'views/orders.php';
            break;
        case 'messages':
            include_once 'views/messages.php';
            break;
        case 'update_pr':
            include_once 'views/update_pr.php';
            break;
        case 'register':
            include_once 'views/register.php';
            break;
    }
?>