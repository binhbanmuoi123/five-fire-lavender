<?php 
include_once "pdo.php";

function userLogin($email, $password) {
    // Truy vấn thông tin người dùng từ cơ sở dữ liệu
    $sql = "SELECT * FROM users WHERE email = ? AND password = ?";
    $user = pdo_getOne($sql, $email, md5($password));
    
    // Kiểm tra xem người dùng có tồn tại hay không
    if ($user) {
        if ($user['role'] == 0) {
            // Nếu role = 0, trả về thông tin rằng đây là admin
            $user['is_admin'] = true;
        } else {
            // Nếu không, xác định là người dùng bình thường
            $user['is_admin'] = false;
        }
        return $user;
    }
    
    // Nếu không tìm thấy người dùng, trả về null
    return null;
}
function checkMail($email){
    $sql ="SELECT * FROM users WHERE email=?";
    $user = pdo_getOne($sql,$email);
    return isset($user['id']);

}
function userRegister($name,$phone,$email,$password){
    $sql= "INSERT INTO users(`name`,`email`,`phone`,`password`)
    VALUES (?,?,?,?)";
    pdo_execute($sql,$name,$phone,$email,md5($password));

}
function getUserId($id) {
    // ID của danh mục mà bạn muốn lấy sản phẩm, ở đây là `1`.

    // Câu lệnh SQL để lấy sản phẩm với categories_id = 1
    $sql = "SELECT * FROM users WHERE id = :?";

    // Truyền giá trị tham số vào hàm pdo_getAll
    return pdo_getAll($sql,$id);
}