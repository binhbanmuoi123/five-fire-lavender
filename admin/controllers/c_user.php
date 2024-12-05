<?php 
// quản lí các trang account
if(isset($_GET['act'])){
switch ($_GET['act']) {
    case 'user':
        include_once 'views/v_header.php';
        include_once 'models/m_user.php';
        $getUser = getUser();
        include_once 'views/v_users.php';
        break;

    default:
        # code...
        break;
}
}else{
    header("location:?mod=admin-home&act=home");
}