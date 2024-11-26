<?php 
// quản lí các trang cart
if(isset($_GET['act'])){
switch ($_GET['act']) {
    case 'home':
        include_once 'views/v_header.php';
        include_once 'views/v_home.php';
   
     
        break;
    default:
        # code...
        break;
}
}else{
    header("location:?mod=admin-home&act=home");
}