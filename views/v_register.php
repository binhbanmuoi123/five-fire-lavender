
    
    <div class="container-default">
        <article>
            <h1>Tạo tài khoản</h1>
            <h2>____</h2>
        </article>
        <aside>
            <div class="form-container">
                <form action="?mod=user&act=post-register" method="post">
                   
                    <div class="form-group">
                
                        <input type="text" id="ten" name="name" placeholder="Họ Và Tên">
                    </div>
                    <div class="form-group">
                     
                        <label><input type="radio" name="gender" value="nu"> Nữ <input type="radio" name="gender" value="nam"> Nam</label>
                        <label></label>
                    </div>
                    <div class="form-group">
                   
                        <input type="date" id="dob" name="dob">
                    </div>
                    <div class="form-group">
                       
                        <input type="email" id="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                       
                        <input type="phone" id="phone" name="phone" placeholder="Số điện thoại">
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
                     <!-- Các phần input khác -->
            

            <!-- Phần ghi chú -->
            <p class="note">
                This site is protected by reCAPTCHA and the Google 
                <a href="https://policies.google.com/privacy" target="_blank">Privacy Policy</a> and 
                <a href="https://policies.google.com/terms" target="_blank">Terms of Service</a> apply.
            </p>

            <!-- Nút Đăng ký -->
            <button type="submit" class="submit-btn">ĐĂNG KÝ</button>

            <!-- Link quay lại -->
            <a href="?mod=page&act=home" class="back-link"><strong style="font-size: 14px; margin-right: 10px;">← </strong>Quay lại trang chủ</a>
                </form>
                
        </aside>   
              
    </div>