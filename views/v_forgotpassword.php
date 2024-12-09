<?php
$loi ="";
    if (isset ($_POST['nutguiyeucau'])==true) {
        $email=$_POST['email'];
        $conn = new PDO("mysql:host=localhost;dbname=lavander;charset=utf8", "root", "");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql="SELECT * FROM users WHERE email=?";
        $stmt = $conn -> prepare($sql);//
        $stmt -> execute ([$email]);
        $count = $stmt -> rowCount();
        if ($count==0) {
            $loi="email bạn nhập chưa đăng kí thành viên";
        }else{
            $matkhaumoi = substr(md5(rand(0,9999999)) ,0 , 8);
            $sql="UPDATE users SET password = ? WHERE email = ?";
            $stmt = $conn -> prepare($sql); 
            $stmt -> execute ([$matkhaumoi ,$email]);
            // echo "đã cập nhật ";
            $kq = guimkmoi($email, $matkhaumoi);
            if ($kq = true) {
                header("location: ?mod=user&act=login");
            }else {
                header("location: ?mod=user&act=forgot");
            }
        }
    }
?>
<?php
function guimkmoi($email, $matkhau){
    require "PHPMailer-master/src/PHPMailer.php"; 
    require "PHPMailer-master/src/SMTP.php"; 
    require 'PHPMailer-master/src/Exception.php'; 
    $mail = new PHPMailer\PHPMailer\PHPMailer(true);//true:enables exceptions
    try {
        $mail->SMTPDebug = 0; //0,1,2: chế độ debug
        $mail->isSMTP();  
        $mail->CharSet  = "utf-8";
        $mail->Host = 'smtp.gmail.com';  
        $mail->SMTPAuth = true;  
        $mail->Username = '123trongvinh456@gmail.com';  // Email gửi đi
        $mail->Password = 'vjmuvhgitmjrfatc';        // Mật khẩu ứng dụng Gmail
        $mail->SMTPSecure = 'ssl';  
        $mail->Port = 465; 
        $mail->setFrom('123trongvinh456@gmail.com', 'Lavender');
        $mail->addAddress($email); // Email người nhận 
        $mail->isHTML(true);  // Set email format to HTML
        $mail->Subject = 'Thư gửi lại mật khẩu';
        $noidungthu = "<p>Lavender chào bạn,</p>
                <p>Yêu cầu đặt lại mật khẩu của bạn đã được xử lý.</p>
                <p>Mật khẩu mới của bạn là: <strong>{$matkhau}</strong></p>
                <p>Vui lòng đăng nhập và thay đổi mật khẩu của bạn ngay.</p>
                <p>Trân trọng,</p>
                <p>Đội ngũ hỗ trợ</p>
        "; 
        $mail->Body = $noidungthu;
        $mail->smtpConnect( array(
            "ssl" => array(
                "verify_peer" => false,
                "verify_peer_name" => false,
                "allow_self_signed" => true
            )
        ));
        $mail->send();
        return true;
    } catch (Exception $e) {
        echo 'Error: ', $mail->ErrorInfo;
        return false;
    }
}
?>

<div class="container-default">
        <article>
            <h1>Đăng nhập</h1>
            <h2>____</h2>
        </article>
        <aside>
            <div class="form-container">
                <form method="post">
                    <div class="form-group">
                    <h2>Phục hồi mật khẩu</h1>
                    <div class="form-group">
                        <input value="<?php if (isset($email)==true)echo $email ?>" type="email" name="email" id="email" placeholder="Nhập Email">
                        
                    </div>
                    <?php if ($loi != "") {?>
                        <h4 style="background-color: RGB(242, 209, 212); color:red; padding: 10px; font-size: 14px ; margin: 0px; border-radius: 3px;"><?php echo $loi  ?></h4>
                    <?php } ?>
          

            <!-- Phần ghi chú -->
            <p class="note">
                This site is protected by reCAPTCHA and the Google 
                <a href="https://policies.google.com/privacy" target="_blank">Privacy Policy</a> and 
                <a href="https://policies.google.com/terms" target="_blank">Terms of Service</a> apply.
            </p>

            <!-- Nút Đăng ký -->
            <button name="nutguiyeucau" value="nutgui" type="submit" class="submit-btn">Gửi</button>
           
            <!-- Link quay lại -->
            <a href="index.html" class="back-link"><strong style="font-size: 14px; margin-right: 10px;">← </strong>Quay lại trang chủ</a>
                </form>
                
        </aside>   
              
    </div>