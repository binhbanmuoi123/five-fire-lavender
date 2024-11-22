<?php 
// quản lí các trang cart
if(isset($_GET['act'])){
switch ($_GET['act']) {
    case 'detail':
        // gọi lại pdo để lấy
        include_once "models/m_product.php";
        $productDetail = loadDetailProduct($_GET['id']);
        // sp lien quan 
        include_once "models/m_product.php";
        $getProductIndex = getProductIndex();
        $getProductBestSelling = getProductBestSelling();
        include_once 'views/v_header.php';
        include_once 'views/v_detail.php';
        include_once 'views/v_footer.php';
     
        break;
    default:
        # code...
        break;
}
}else{
    header("location:?mod=page&act=home");
}