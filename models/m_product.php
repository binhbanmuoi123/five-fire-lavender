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
function loadCart(){
    $sql = "SELECT orders_details.*, products.name, products.image_01, products.price
        FROM orders_details
        INNER JOIN products ON orders_details.product_id = products.id";
    return pdo_getAll($sql);
}
function addOrderDetailWithoutOrder($product_id, $quantity) {
    $sql = "INSERT INTO orders_details (product_id, quantity, order_id) 
            VALUES (:product_id, :quantity, NULL)";
    $params = [
        'product_id' => $product_id,
        'quantity' => $quantity
    ];
    pdo_executehehee($sql, $params);
}

function getCartProducts() {
    // Lấy tất cả sản phẩm từ orders_details, không phân biệt order_id
    $sql = "SELECT od.id, p.name, p.price, p.image_01, od.quantity, od.order_id 
            FROM orders_details od
            JOIN products p ON od.product_id = p.id";
    return pdo_getAll($sql); // Trả về danh sách sản phẩm
}

function deleteCartProducts($id) {
    $sql = "DELETE FROM orders_details WHERE id = :id"; // Lệnh SQL
    return pdo_executehehee($sql, ['id' => $id]); // Thực thi lệnh
}

?>
