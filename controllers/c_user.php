<?php
if(isset($_GET['act'])){


    switch ($_GET['act']) {
        case 'login':
            include_once 'views/v_header.php';
            include_once 'views/v_login.php';
            include_once 'views/v_footer.php';
          
            break;
        case 'register':
            include_once 'views/v_header.php';
            include_once 'views/v_register.php';
            include_once 'views/v_footer.php';
          
            break;
        case 'forgot':
            include_once 'views/v_header.php';
            include_once 'views/v_forgotpassword.php';
            include_once 'views/v_footer.php';
          
            break;
        default:
            # code...
            break;
    }
    }else{
        header("location:?mod=page&act=login");
    }