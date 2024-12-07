<?php
<<<<<<< HEAD
    
    // include_once 'views/update_pr.php';
    // include_once 'views/admins.php';
    // include_once 'views/messages.php';
    // include_once 'views/orders.php';
    // include_once 'views/products.php';
    $page=isset($_GET['trang']) ? $_GET['trang'] : 'index';

    switch ($page){
        case 'index':
            include_once 'views/header.php';
            include_once 'views/home.php';
            break;
        case 'products':
            include_once 'views/header.php';
            include_once 'views/products.php';
            break;
        case 'users':
            include_once 'views/header.php';
            include_once 'views/users.php';
            break;
        case 'admins':
            include_once 'views/header.php';
            include_once 'views/admins.php';
            break;
        case 'orders':
            include_once 'views/header.php';
            include_once 'views/orders.php';
            break;
        case 'messages':
            include_once 'views/header.php';
            include_once 'views/messages.php';
            break;
        case 'update_pr':
            include_once 'views/header.php';
            include_once 'views/update_pr.php';
            break;
        case 'register':
            include_once 'views/header.php';
            include_once 'views/register.php';
            break;
        case 'login':
            include_once 'views/login.php';
            break;
    }
?>
=======
ob_start();
session_start();
// sử dungj để điều hướng các controller
// sử dụng controller để tiếp cận người dung


// Controllers
// Nhiệm vụ kết nối các views đến models
if (isset($_GET['mod'])) {
    

    switch ($_GET['mod']) {
        case 'admin-home':
            include_once 'controllers/c_home.php';
            break;
            // điều hướng về controller page
            case 'admin-product':
            include_once 'controllers/c_product.php';
            break;
            // tương tự controllers page điều hương về user
            case 'admin-user':
            include_once 'controllers/c_user.php';
            break;
            case 'admin-admin':
            include_once 'controllers/c_admin.php';
            break;
            case 'admin-register':
            include_once 'controllers/c_register.php';
            break;
            case 'admin-update_pr':
            include_once 'controllers/c_update_pr.php';
            break;
            case 'admin-order':
            include_once 'controllers/c_order.php';
            break;
            case 'admin-messages':
            include_once 'controllers/c_messages.php';
            break;
            case 'admin-category':
            include_once 'controllers/c_category.php';
            break;
            // tương tự controllers page điều hương về cart
        
        default:
            # code...
            break;
    }
}else{
    header("location:?mod=admin-home&act=home");
}
// Models 
// Chỗ tương tác database để lấy các dữ liệu

// Views 
// Chỗ hiển thị giao diện (html, css, js)
>>>>>>> bossphuong
