<?php
include_once "pdo.php";

function getUser() {
    // ID của danh mục mà bạn muốn lấy sản phẩm, ở đây là `1`.
    $role= 1;

    // Câu lệnh SQL để lấy sản phẩm với categories_id = 1
    $sql = "SELECT * FROM users WHERE role = :role";

    // Truyền giá trị tham số vào hàm pdo_getAll
    return pdo_getAll($sql, ['role' => $role]);
}
function getAdmin() {
    // ID của danh mục mà bạn muốn lấy sản phẩm, ở đây là `1`.
    $role= 0;

    // Câu lệnh SQL để lấy sản phẩm với categories_id = 1
    $sql = "SELECT * FROM users WHERE role = :role";

    // Truyền giá trị tham số vào hàm pdo_getAll
    return pdo_getAll($sql, ['role' => $role]);
}
function adminRegister($name,$email,$password,$role){
    $sql= "INSERT INTO users(`name`,`email`,`password`,`role`)
    VALUES (?,?,?,?)";
    pdo_execute($sql,$name,$email,md5($password),$role);

}