<?php
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'newarrival':
            // gọi pdo lấy và product để lấy sp
            include_once "models/m_product.php";
            $getProductNewArrival =getProductNewArrival();
            include_once 'views/v_header.php';
   
            include_once 'views/v_newarrival.php';
            include_once 'views/v_footer.php';
            break;

        case 'saleoff':
            include_once 'views/v_header.php';
            include_once 'views/v_saleoff.php';
            include_once 'views/v_footer.php';
            break;

        case 'top':
            include_once 'views/v_header.php';
            include_once 'views/v_top.php';
            include_once 'views/v_footer.php';
            break;

        case 'accessories':
            include_once 'views/v_header.php';
            include_once 'views/v_accessories.php';
            include_once 'views/v_footer.php';
            break;

        case 'bestselling':
            include_once 'views/v_header.php';
            include_once 'views/v_bestselling.php';
            include_once 'views/v_footer.php';
            break;

        case 'bottom':
            include_once 'views/v_header.php';
            include_once 'views/v_bottom.php';
            include_once 'views/v_footer.php';
            break;

        case 'flashsale':
            include_once 'views/v_header.php';
            include_once 'views/v_flashsale.php';
            include_once 'views/v_footer.php';
            break;
        case 'outerwear':
            include_once 'views/v_header.php';
            include_once 'views/v_outerwear.php';
            include_once 'views/v_footer.php';
            break;

        default:
            // Hiển thị thông báo nếu không tìm thấy trang phù hợp
            echo 'Trang không tồn tại';
            break;
    }
} else {
    header("location:?mod=page&act=home");
    exit();
}
