<?php
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'login':
            include_once 'views/v_header.php';
            include_once 'views/v_login.php';
            include_once 'views/v_footer.php';
            break;

        case 'post-login':
            $email = $_POST['email'];
            $password = $_POST['password'];
            include_once "models/m_user.php";
            $user = userLogin($email, $password);

            if (isset($user['id'])) {
                unset($user['password']); // Loại bỏ mật khẩu khỏi session để bảo mật
                $_SESSION['user'] = $user;

                if ($user['is_admin']) {
                    // Nếu là admin
                    echo 'Đăng nhập thành công với tư cách Admin.';
                    header("location: ?mod=admin&act=dashboard");
                } else {
                    // Nếu là người dùng thông thường
                    echo 'Đăng nhập thành công với tư cách người dùng.';
                    header("location: ?mod=page&act=home");
                }
            } else {
                $_SESSION['alert'] = 'Địa chỉ email sai hoặc mật khẩu không đúng!';
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
        case 'post-register':
            $phone = $_POST['phone'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            include_once "models/m_user.php";
            if(checkMail($email)){
                $_SESSION['alert'] ="Email đã được sử dụng vui lòng nhập Email khác!";
                header("location: ?mod=user&act=register");
                
            }else{
                userRegister($name,$email,$phone,$password);  
                header("location: ?mod=user&act=login");
            }
            break;

        case 'forgot':
            include_once 'views/v_header.php';
            include_once 'views/v_forgotpassword.php';
            include_once 'views/v_footer.php';
            break;

        default:
            break;
    }
} else {
    header("location:?mod=page&act=login");
}
