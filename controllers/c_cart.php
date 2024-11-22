<?php 
// quản lí các trang cart
if(isset($_GET['act'])){
switch ($_GET['act']) {
    case 'cart':
        include_once 'views/v_header.php';
        include_once 'views/v_cart.php';
        include_once 'views/v_footer.php';
     
        break;
    default:
        # code...
        break;
}
}else{
    header("location:?mod=page&act=home");
}