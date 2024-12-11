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
function getUserByEmail($email) {
    $sql = "SELECT * FROM users WHERE email = ?";
    return pdo_getOne($sql, $email);
}

function updatePasswordByEmail($email, $newPassword) {
    $sql = "UPDATE users SET password = ? WHERE email = ?";
    return pdo_execute($sql, md5($newPassword), $email);
}
function sendNewPasswordEmail($email, $newPassword) {
    require "PHPMailer-master/src/PHPMailer.php";
    require "PHPMailer-master/src/SMTP.php";
    require 'PHPMailer-master/src/Exception.php';

    $mail = new PHPMailer\PHPMailer\PHPMailer(true);

    try {
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->CharSet = "utf-8";
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = '123trongvinh456@gmail.com';
        $mail->Password = 'vjmuvhgitmjrfatc'; // App-specific password
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $mail->setFrom('123trongvinh456@gmail.com', 'Lavender');
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject = 'Thư gửi lại mật khẩu';
        $mail->Body = "<p>Lavender chào bạn,</p>
            <p>Yêu cầu đặt lại mật khẩu của bạn đã được xử lý.</p>
            <p>Mật khẩu mới của bạn là: <strong>{$newPassword}</strong></p>
            <p>Vui lòng đăng nhập và thay đổi mật khẩu của bạn ngay.</p>
            <p>Trân trọng,</p>
            <p>Đội ngũ hỗ trợ</p>";

        $mail->smtpConnect([
            "ssl" => [
                "verify_peer" => false,
                "verify_peer_name" => false,
                "allow_self_signed" => true,
            ]
        ]);

        $mail->send();
        return true;
    } catch (Exception $e) {
        return false;
    }
}