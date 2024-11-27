<?php
session_start();
if(!isset($_SESSION['cart'])){
    $_SESSION['cart'] = array();
}
// sử dungj để điều hướng các controller
// sử dụng controller để tiếp cận người dung
$baseUrl= 'http://localhost/lanvender/';
include_once "controllers/c_page.php";
// Controllers
// Nhiệm vụ kết nối các views đến models
if (isset($_GET['mod'])) {
    

    switch ($_GET['mod']) {
        case 'page':
            include_once 'controllers/c_page.php';
            break;
            // điều hướng về controller page
            case 'user':
            include_once 'controllers/c_user.php';
            break;
            // tương tự controllers page điều hương về user
            case 'cart':
            include_once 'controllers/c_cart.php';
            break;
            case 'product':
            include_once 'controllers/c_product.php';
            break;
            case 'detail':
            include_once 'controllers/c_detail.php';
            break;
            case 'checkout':
            include_once 'controllers/c_checkout.php';
            break;
            // tương tự controllers page điều hương về cart
        
        default:
            # code...
            break;
    }
}else{
    header("location:?mod=page&act=home");
}
// Models 
// Chỗ tương tác database để lấy các dữ liệu

// Views 
// Chỗ hiển thị giao diện (html, css, js)