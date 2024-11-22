<?php
if(isset($_GET['act'])){
    switch ($_GET['act']) {
        case 'login':
            include_once 'views/v_header.php';
            include_once 'views/v_login.php';
            include_once 'views/v_footer.php';
          
            break;
        case 'post-login':
            $email=$_POST['email'];
            $password = $_POST['password'];
          include_once "models/m_user.php";
          $user = userLogin($email,$password);
        if (isset($user['id'])) {
            unset($user['passwords']);
            $_SESSION['user'] = $user;
            echo 'dang nhap thanh cong';
            header("location: ?mod=page&act=home");
        }else{
        $_SESSION['alert']='Địa chỉ email sai hoặc mật khẩu không đúng! ';
            header("location: ?mod=user&act=login");
        }
        break;
        case 'logout':
        unset($_SESSION['user']);
        header("location: ?mod=page&act=home");
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
    