<?php 
// quản lí các trang rời rạc như: home, contact ,about,...
if(isset($_GET['act'])){


switch ($_GET['act']) {
    case 'home':
        include_once 'views/v_header.php';
        include_once 'views/v_page_home.php';     
        break;
    default:
        # code...
        break;
}
}else{
    header("location:?mod=page&act=home");
}