<?php
include_once "pdo.php";

function getProductIndex() {
    // ID của danh mục mà bạn muốn lấy sản phẩm, ở đây là `1`.
    $categories_id = 1;

    // Câu lệnh SQL để lấy sản phẩm với categories_id = 1
    $sql = "SELECT * FROM products WHERE categories_id = :categories_id";

    // Truyền giá trị tham số vào hàm pdo_getAll
    return pdo_getAll($sql, ['categories_id' => $categories_id]);
}
function getProductBestSelling() {
    // ID của danh mục mà bạn muốn lấy sản phẩm, ở đây là `1`.
    $categories_id = 3;

    // Câu lệnh SQL để lấy sản phẩm với categories_id = 1
    $sql = "SELECT * FROM products WHERE categories_id = :categories_id";

    // Truyền giá trị tham số vào hàm pdo_getAll
    return pdo_getAll($sql, ['categories_id' => $categories_id]);
}
function getProductNewArrival() {
    // ID của danh mục mà bạn muốn lấy sản phẩm, ở đây là `1`.
    $categories_id = 2;

    // Câu lệnh SQL để lấy sả n phẩm với categories_id = 1
    $sql = "SELECT * FROM products WHERE categories_id = :categories_id";

    // Truyền giá trị tham số vào hàm pdo_getAll
    return pdo_getAll($sql, ['categories_id' => $categories_id]);
}
function getProductRandom($id) {
    // ID của danh mục mà bạn muốn lấy sản phẩm, ở đây là `1`.


    // Câu lệnh SQL để lấy sả n phẩm với categories_id = 1
    $sql = "SELECT * FROM products WHERE categories_id =? ORDER BY RAND() LIMIT 4";


    // Truyền giá trị tham số vào hàm pdo_getAll
    return pdo_getAll($sql,$id);
}
function loadDetailProduct($id){
    $sql ="SELECT * FROM products WHERE id =?";
    return pdo_getOne($sql, $id);
}

?>
