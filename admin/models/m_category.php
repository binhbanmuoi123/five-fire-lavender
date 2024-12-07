<?php
include_once "pdo.php";
function getAllCategory(){
    $sql ="SELECT * FROM categories";
    return pdo_getAll($sql);
}
function getCategoryByID($id){
    $sql ="SELECT * FROM categories WHERE id = ?";
    return pdo_getOne($sql,$id);
}
function updateCategory($id, $name,$status) {
    $sql = "UPDATE categories
            SET name = ?, status = ? 
            WHERE id = ?";
    return pdo_execute($sql, $name,$status,$id);
}
function addCategory($name,$status) {
    // SQL thêm sản phẩm
    $sql = "INSERT INTO categories (name, status)
            VALUES (?, ?)";
    // Thực thi câu lệnh SQL
    pdo_execute($sql, $name, $status);
}