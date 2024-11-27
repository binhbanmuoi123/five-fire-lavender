<?php
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'checkout':
            include_once "models/m_product.php";
            $cartProducts = getCartProducts(); // Lấy sản phẩm từ database
            include_once 'views/v_header.php';
            include_once 'views/v_checkout.php';
            include_once 'views/v_footer.php';
            break;
        case 'confirm':
            include_once 'views/header.php';
  
            if(isset($_POST['dongythanhtoan'])){
                // lấy tt insert vào database
             
        }
            include_once 'views/footer.php';
            break;
        default:
            break;
    }
} else {
    header('location : ../index.php');
}

