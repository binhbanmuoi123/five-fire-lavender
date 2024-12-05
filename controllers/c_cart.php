<?php 
// quản lí các trang cart
if(isset($_GET['act'])){
switch ($_GET['act']) {
    case 'cart':
            include_once "models/m_product.php";
            $cartProducts = getCartProducts(); // Lấy sản phẩm từ database
            include_once 'views/v_header.php';
            include_once 'views/v_cart.php';
            include_once 'views/v_footer.php';
            break;
        case 'addtocart':
            if (!isset($_SESSION['cart'])) {
                $_SESSION['cart'] = [];
            }
        
            $idsp = $_GET['id']; // ID sản phẩm
            $incart = false;
        
            foreach ($_SESSION['cart'] as &$sp) {
                if ($sp['id'] == $idsp) {
                    $sp['quantity']++;
                    $incart = true;
                    break;
                }
            }
        
            if (!$incart) {
                array_push($_SESSION['cart'], [
                    "id" => $idsp,
                    "quantity" => 1
                ]);
            }
        
            // Lưu sản phẩm vào bảng `orders_details` ngay lập tức
            include_once "models/m_product.php"; // Kết nối tới models
            addOrderDetailWithoutOrder($idsp, 1); // Hàm lưu sản phẩm, quantity mặc định là 1
        
            $_SESSION['alert'] = "Thêm sản phẩm vào giỏ hàng thành công!";
            header("location: ?mod=cart&act=cart");
            break;
        case 'delete':
            if (isset($_GET['id'])) {
                $idsp = $_GET['id']; // ID sản phẩm cần xóa
        
                // Xóa sản phẩm khỏi session
                if (isset($_SESSION['cart'])) {
                    foreach ($_SESSION['cart'] as $key => $sp) {
                        if ($sp['id'] == $idsp) {
                            unset($_SESSION['cart'][$key]); // Xóa khỏi session
                            $_SESSION['cart'] = array_values($_SESSION['cart']); // Sắp xếp lại
                            break;
                        }
                    }
                }
        
                // Xóa sản phẩm khỏi cơ sở dữ liệu
                include_once "models/m_product.php"; // Kết nối models
                if (deleteCartProducts($idsp)) {
                    $_SESSION['alert'] = "Sản phẩm đã được xóa khỏi cơ sở dữ liệu và giỏ hàng!";
                } else {
                    $_SESSION['alert'] = "Lỗi khi xóa sản phẩm khỏi cơ sở dữ liệu!";
                }
            }
            header("location: ?mod=cart&act=cart");
            break;
            

    default:
        # code...
        break;
}
}else{
    header("location:?mod=page&act=home");
}