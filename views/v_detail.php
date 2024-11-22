
<div class="boxduongdan">
        <div class="duongdan">
            <label for="">Trang chủ - / - TOPS - / - KID TEE - WRITE</label>
        </div>
    </div>
    
   <article>
    <div class="sanphamchitiet">
        <!-- Chi tiết sản phẩm -->
        <div class="boxanh">
            <div class="anhsanpham">
                <img src="public/img/<?= $productDetail['image_01'] ?>" alt="<?= $productDetail['name'] ?>" onclick="changeImage('public/img/<?= $productDetail['image_01'] ?>')">
                <img src="public/img/<?= $productDetail['image_02'] ?>" alt="<?= $productDetail['name'] ?>" onclick="changeImage('public/img/<?= $productDetail['image_02'] ?>')">
                <img src="public/img/<?= $productDetail['image_03'] ?>" alt="<?= $productDetail['name'] ?>" onclick="changeImage('public/img/<?= $productDetail['image_03'] ?>')">
                <img src="public/img/<?= $productDetail['image_04'] ?>" alt="<?= $productDetail['name'] ?>" onclick="changeImage('public/img/<?= $productDetail['image_04'] ?>')">
            </div>
            <div class="anhspto">
                <img id="largeImage" src="public/img/<?= $productDetail['image_01'] ?>" alt="<?= $productDetail['name'] ?>">
            </div>
        </div>
        <div class="boxmota">
            <div class="mota">
                <label style="font-weight: bold;"><?= $productDetail['name'] ?></label>
                <div class="danhgia">
                    <i class="fa-solid fa-star fa-2xs"></i><i class="fa-solid fa-star fa-2xs"></i><i class="fa-solid fa-star fa-2xs"></i><i class="fa-solid fa-star fa-2xs"></i><i class="fa-solid fa-star fa-2xs"></i> 
                    <label style="font-size: 14px;">5 lượt đánh giá</label>
                </div>
                <div class="danhgia">
                    <label style="font-size: 14px;">SKU: KIDAOWHS</label>
                </div>
                <hr>
                <div class="price">
                    <div class="giamgia">30%</div>
                    <label style="padding: 5px; font-weight: bold;">
                        <?= number_format($productDetail['price'], 0, ',', '.') ?>₫ 
                        <del><?= number_format($productDetail['oldprice'], 0, ',', '.') ?>₫</del>
                    </label>
                </div>
                <hr>
                <div class="sizes">
                    <span>S</span> <span>M</span> <span>L</span> <span>XL</span>
                </div>
                <hr>
                <div class="soluong">
                    <button type="button" onclick="updateQuantity(-1)">-</button>
                    <input type="text" id="quantity" value="1" readonly>
                    <button type="button" onclick="updateQuantity(1)">+</button>
                </div>
                <div class="themvaogiohang">
                    
                    <button type="button"><a href="?mod=cart&act=addtocart&id=<?= $sp['id'] ?>">THÊM VÀO GIỎ</a></button>
                </div>
                <div class="thongso">
                    <b style="font-size: 14px;">Mô tả</b><br>
                    <label><?= $productDetail['description'] ?></label>
                </div>
                <div class="anhthongso">
                    <img src="public/img/size.jpg" alt="Bảng size">
                </div>
            </div>
        </div>
    </div>

</article>
<h2 style="width: 100%; text-align:center" >SẢN PHẨM LIÊN QUAN</h1>
    <article>

        <div class="boxspto">
            <div class="boxsp">
            <?php foreach($getProductIndex as $product): ?>
            <div class="sp">
                <div class="sale">23%</div>
                <a href="?mod=detail&act=detail&id=<?=$product['id']?>">
                <img src="public/img/<?=$product['image_01']?>" alt=""></a>
                <div class="tensp" ><label><?=$product['name']?></label></div>
                <div class="price" ><?=number_format($product['price'])?> <del><?=$product['oldprice']?></del></div>
                <div class="danhgia"><i class="fa-solid fa-star fa-2xs" style="color: #ff4d4f;"></i><i class="fa-solid fa-star fa-2xs" style="color: #ff4d4f;"></i><i class="fa-solid fa-star fa-2xs" style="color: #ff4d4f;"></i><i class="fa-solid fa-star fa-2xs" style="color: #ff4d4f;"></i><i class="fa-solid fa-star fa-2xs" style="color: #ff4d4f;"></i>
    <label for="" style="font-size: 9px;">(1 lượt đánh giá)</label></div>
            </div>
            <?php endforeach; ?>
                </div>
            </div>
        </div>
    </article>
    
    <script src="public/js/detail.js"></script>
    <script src="public/js/products.js"></script>