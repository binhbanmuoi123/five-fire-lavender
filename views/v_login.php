<div class="container-default">
        <article>
            <h1>Đăng nhập</h1>
            <h2>____</h2>
        </article>
        <aside>
            <div class="form-container">
                <form action="?mod=user&act=post-login" method="post">
                    <div class="form-group">

                    <div class="form-group">
                       
                        <input type="email" id="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                   
                        <input type="password" id="password" name="password" placeholder="Mật khẩu">
                        <?php if (isset($_SESSION['alert'])): ?>
                        <div class="alert alert-danger mt-3 s" style="font-size: 15px;">
                            <?= $_SESSION['alert'] ?>
                        </div>
                            <?php endif; ?>
                        <?php unset($_SESSION['alert']) ?>

                    </div>
          

            <!-- Phần ghi chú -->
            <p class="note">
                This site is protected by reCAPTCHA and the Google 
                <a href="https://policies.google.com/privacy" target="_blank">Privacy Policy</a> and 
                <a href="https://policies.google.com/terms" target="_blank">Terms of Service</a> apply.
            </p>

            <!-- Nút Đăng ký -->
            <button type="submit" class="submit-btn">ĐĂNG NHẬP </button>
           
            <!-- Link quay lại -->
            <a href="?mod=user&act=forgot" class="back-link"><strong style="font-size: 14px; margin-right: 10px;"><a href="?mod=user&act=forgot" style="text-decoration: none; font-size: 12px; font-weight: 200; color: black;">Quên mật khẩu ?</a><strong style="font-size: 12px; font-weight: 100; color: #939090;"> hoặc </strong>
            <a href="?mod=user&act=register" style="text-decoration: none; font-size: 12px; font-weight: 200; color: black;">đăng ký</a>
            <a href="?mod=page&act=home" class="back-link"><strong style="font-size: 14px; margin-right: 10px;">← </strong>Quay lại trang chủ</a>
                </form>
                
        </aside>   
              
    </div>