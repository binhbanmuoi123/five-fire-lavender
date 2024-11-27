<div class="container-default">
    <!-- Bắt đầu form với action trỏ đến trang confirm thanh toán -->
    <form action="index.php?pg=checkout&action=confirm" method="post">
        <div class="box-left">
            <div class="the-title">THANH TOÁN SẢN PHẨM</div>
            <p style="font-size: 12px;">
                <a href="#" style="text-decoration: none; font-size: 12px;">Giỏ hàng</a>
                <strong> > </strong> Thông tin giao hàng
            </p>
            <h4 style="font-weight: 200;">Thông Tin Giao Hàng</h4>
            
            <!-- Phần thông tin người dùng -->
            <div class="form-group-name">
                <input type="text" id="name" name="name" placeholder="Họ và tên" >
            </div>
            <div class="phone-and-email">
                <div class="form-group-email">
                    <input type="email" id="email" name="email" placeholder="Email" >
                </div>
                <div class="form-group-phone">
                    <input type="tel" id="phone" name="phone" placeholder="Số điện thoại" >
                </div>
            </div>
            <div class="form-group-address">
                <input type="text" id="address" name="address" placeholder="Địa chỉ" >
            </div>
            <div class="desciption">
                <div class="form-group-province">
                    <select id="province" name="province" >
                        <option value="">Chọn tỉnh / thành</option>
                        <option value="Hà Nội">Hà Nội</option>
                        <option value="TP Hồ Chí Minh">TP Hồ Chí Minh</option>
                        <!-- Thêm các tỉnh khác -->
                    </select>
                </div>
                <div class="form-group-district">
                    <select id="district" name="district" >
                        <option value="">Chọn quận / huyện</option>
                        <!-- Thêm các quận huyện khác -->
                    </select>
                </div>
                <div class="form-group-ward">
                    <select id="ward" name="ward" >
                        <option value="">Chọn phường / xã</option>
                        <!-- Thêm các phường xã khác -->
                    </select>
                </div>
            </div>

            <!-- Phương thức vận chuyển -->
            <p>Phương thức vận chuyển</p>
            <div class="shipping-method">
                <input type="radio" id="ship" name="shipping" value="free" checked>
                <label for="ship">Miễn Phí Vận Chuyển</label>
            </div>

            <!-- Phương thức thanh toán -->
            <p>Phương thức thanh toán</p>
            <div class="payment-method">
                <input type="radio" id="cod" name="payment_method" value="cod" checked>
                <label for="cod">Thanh toán khi nhận hàng (COD)</label>

                <input type="radio" id="momo" name="payment_method" value="momo">
                <label for="momo">MoMo</label>

                <input type="radio" id="bank" name="payment_method" value="bank">
                <label for="bank">Ngân hàng</label>
            </div>

            <!-- Nút điều hướng -->
            <div class="btn-container">
                <a href="#" class="btn-giohang">Giỏ hàng</a>
                <button type="submit" name="dongythanhtoan" class="btn">Hoàn tất đơn hàng</button>
            </div>
        </div>
        </form>

        <!-- Phần hiển thị giỏ hàng -->
        <div class="box-right">
            <div class="cart-container">
                <?php
                $tongTien = 0; // Khởi tạo biến tổng tiền
                foreach ($cartProducts as $key => $item):
                    $tongTien += $item['price']; // Tính tổng tiền
                ?>
                    <div class="cart-item">
                        <div class="item-number"><?= $key + 1; ?></div>
                        <img src="public/img/<?= $item['image_01'] ?>" alt="" class="item-image">
                        <div class="item-info">
                            <p class="item-name"><?= $item['name'] ?></p>
                            <p class="item-size">S</p>
                        </div>
                        <p class="item-price"><?= number_format($item['price'], 0, ',', '.') ?>₫</p>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="discount-section">
                <input type="text" placeholder="Mã giảm giá" class="discount-code" name="discount_code">
                <button class="apply-btn" type="button">Sử dụng</button>
            </div>

            <div class="price-summary">
                <div class="summary-item">
                    <span class="label">Tạm tính: </span>
                    <span class="value"><?= number_format($tongTien, 0, ',', '.') ?>₫</span>
                </div>
                <div class="summary-item">
                    <span class="label">Phí vận chuyển</span>
                    <span class="value">Miễn phí</span>
                </div>
            </div>

            <div class="total">
                <span class="total-label">Tổng cộng</span>
                <span class="total-amount" style="font-size: 20px;"><?= number_format($tongTien, 0, ',', '.') ?>₫</span>
                <!-- Truyền tổng tiền qua input hidden -->
                <input type="hidden" name="tong_tien" value="<?= $tongTien ?>">
            </div>
        </div>
    
</div>
