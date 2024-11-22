<?php 
// quản lí các trang cart
if(isset($_GET['act'])){
switch ($_GET['act']) {
    case 'cart':
        include_once 'views/v_header.php';
        include_once 'views/v_cart.php';
        include_once 'views/v_footer.php';
     
        break;
    case 'addtocart':
        if(!isset($_SESSION['cart'])){
        $_SESSION['cart'] = [];
    }
    $idsp = $_GET['id'];
    $incart = false;
    foreach($_SESSION['cart'] as &$sp){
        if($sp['id'] == $idsp){
            $sp['quantity']++;
            $incart = true;
            break;
        }
    }
    if(!$incart){
        array_push($_SESSION['cart'], [
            "id" => $idsp,
            "quantity" => 1
        ]); 
    }
    
        break;
    default:
        # code...
        break;
}
}else{
    header("location:?mod=page&act=home");
}