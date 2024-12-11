<div class="container-default">
    <article>
        <h1>Phục hồi mật khẩu</h1>
        <h2>____</h2>
    </article>
    <aside>
        <div class="form-container">
            <form method="post" action="?mod=user&act=post-forgot">
                <div class="form-group">
                    <input type="email" name="email" id="email" placeholder="Nhập Email" 
                           value="<?php if (isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>">
                </div>
                <?php if (isset($_SESSION['alert'])) { ?>
                    <h4 style="background-color: RGB(242, 209, 212); color:red; padding: 10px; font-size: 14px; margin: 0px; border-radius: 3px;">
                        <?php echo $_SESSION['alert']; unset($_SESSION['alert']); ?>
                    </h4>
                <?php } ?>

                <p class="note">
                    This site is protected by reCAPTCHA and the Google 
                    <a href="https://policies.google.com/privacy" target="_blank">Privacy Policy</a> and 
                    <a href="https://policies.google.com/terms" target="_blank">Terms of Service</a> apply.
                </p>

                <button name="nutguiyeucau" value="nutgui" type="submit" class="submit-btn">Gửi</button>
                <a href="index.html" class="back-link">
                    <strong style="font-size: 14px; margin-right: 10px;">← </strong>Quay lại trang chủ
                </a>
            </form>
        </div>
    </aside>   
</div>
