<?php 
// quản lí các trang account
if(isset($_GET['act'])){
switch ($_GET['act']) {

    case 'admin':
        include_once 'views/v_header.php';
        include_once 'models/m_user.php';
        $getAdmin = getAdmin();
        include_once 'views/v_admins.php';
   
     
        break;
    case 'register':
        include_once 'views/v_header.php';
        include_once 'models/m_user.php';
        include_once 'views/v_register_admin.php';
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $role=0;
       
            adminRegister($name,$email,$password,$role);  
            header("location:?mod=admin-admin&act=admin");
       

       
   
     
        break;
    default:
        # code...
        break;
}
}else{
    header("location:?mod=admin-home&act=home");
}