<?php
include_once "pdo.php";

function getAllProduct() {

    $sql = "SELECT products.*, categories.name AS category_name FROM products INNER JOIN categories ON products.categories_id = categories.id; -- Liên kết hai bảng dựa trên khóa ngoại
    ";

    // Thực thi câu truy vấn và trả về kết quả
    return pdo_getAll($sql);
}
function deleteProduct($id) {
    $sql = "DELETE FROM products WHERE id = ?"; // Câu lệnh SQL để xóa sản phẩm
    return pdo_execute($sql, $id); // Gọi hàm pdo_execute để thực thi
}
function addProduct($name, $price, $oldprice, $image1, $image2, $image3, $image4, $description, $categories_id, $status) {
    // SQL thêm sản phẩm
    $sql = "INSERT INTO products (name, price, oldprice, image_01, image_02, image_03, image_04, description, categories_id, status)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Thực thi câu lệnh SQL
    pdo_execute($sql, $name, $price, $oldprice, $image1, $image2, $image3, $image4, $description, $categories_id, $status);
}
// Hàm lấy thông tin sản phẩm theo ID
function getProductById($id) {
    $sql = "SELECT * FROM products WHERE id = ?";
    return pdo_getOne($sql, $id);
}
// Hàm cập nhật sản phẩm
function updateProduct($id, $name, $price, $oldprice, $image_01, $image_02, $image_03, $image_04, $description, $categories_id, $status) {
    $sql = "UPDATE products 
            SET name = ?, price = ?, oldprice = ?, image_01 = ?, image_02 = ?, image_03 = ?, image_04 = ?, description = ?, categories_id = ?, status = ? 
            WHERE id = ?";
    return pdo_execute($sql, $name, $price, $oldprice, $image_01, $image_02, $image_03, $image_04, $description, $categories_id, $status, $id);
}
