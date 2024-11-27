<img style="width: 100%;" src="public/img/slideshow_1.webp" alt="">
    <aside>
        <div class="odichvu">
            <div class="dichvu">
                <div class="dichvu1">
                <i class="fa-solid fa-rocket"></i>
                <p style="font-size: 13px;">Giao hàng miễn phí</p>
                <p style="font-size: 11px;">với đơn hàng từ 500K trở lên</p>
            </div>
        </div>
            <div class="dichvu">
                <div class="dichvu1">
                <i class="fa-solid fa-phone"></i>
                <p style="font-size: 13px;">Hỗ trợ 24/7</p>
                <p style="font-size: 11px;">Hỗ trợ online / offline 24/7</p>
            </div>
        </div>  
            <div class="dichvu">
                <div class="dichvu1">
                <i class="fa-solid fa-boxes-stacked"></i>
                <p style="font-size: 13px;">Miễn phí đổi trả</p>
                <p style="font-size: 11px;">Trong vòng 7 ngày</p>
            </div>
        </div>
            <div class="dichvu">
                <div class="dichvu1">
                <i class="fa-solid fa-globe"></i>
                <p style="font-size: 13px;">Đặt hàng trực tuyến</p>
                <p style="font-size: 11px;">Hotline: 0357 420 420</p>
            </div>
        </div>
        </div>
    </aside>
    <article>
            <p>FOR THE YOUTH</p>
            <div class="boxspto">
        <div class="boxsp" >
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
       
            <!-- <div class="sp"> -->
                <!-- <div class="sale">23%</div>
                <img src="public/img/sp1.webp" alt="">
                <div class="tensp" ><label>2BAR BABY TEE - BLUE</label></div>
                <div class="price" >221,000₫ <del> 286,000₫</del></div>
                <div class="danhgia"><i class="fa-solid fa-star fa-2xs" style="color: #ff4d4f;"></i><i class="fa-solid fa-star fa-2xs" style="color: #ff4d4f;"></i><i class="fa-solid fa-star fa-2xs" style="color: #ff4d4f;"></i><i class="fa-solid fa-star fa-2xs" style="color: #ff4d4f;"></i><i class="fa-solid fa-star fa-2xs" style="color: #ff4d4f;"></i>
<label for="" style="font-size: 9px;">(1 lượt đánh giá)</label></div>
            </div>
            <div class="sp">
                <div class="sale">23%</div>
                <img src="public/img/sp1.webp" alt="">
                <div class="tensp" ><label>2BAR BABY TEE - BLUE</label></div>
                <div class="price" >221,000₫ <del> 286,000₫</del></div>
                <div class="danhgia"><i class="fa-solid fa-star fa-2xs" style="color: #ff4d4f;"></i><i class="fa-solid fa-star fa-2xs" style="color: #ff4d4f;"></i><i class="fa-solid fa-star fa-2xs" style="color: #ff4d4f;"></i><i class="fa-solid fa-star fa-2xs" style="color: #ff4d4f;"></i><i class="fa-solid fa-star fa-2xs" style="color: #ff4d4f;"></i>
<label for="" style="font-size: 9px;">(1 lượt đánh giá)</label></div>
            </div>
            <div class="sp">
                <div class="sale">23%</div>
                <img src="public/img/sp1.webp" alt="">
                <div class="tensp" ><label>2BAR BABY TEE - BLUE</label></div>
                <div class="price" >221,000₫ <del> 286,000₫</del></div>
                <div class="danhgia"><i class="fa-solid fa-star fa-2xs" style="color: #ff4d4f;"></i><i class="fa-solid fa-star fa-2xs" style="color: #ff4d4f;"></i><i class="fa-solid fa-star fa-2xs" style="color: #ff4d4f;"></i><i class="fa-solid fa-star fa-2xs" style="color: #ff4d4f;"></i><i class="fa-solid fa-star fa-2xs" style="color: #ff4d4f;"></i>
<label for="" style="font-size: 9px;">(1 lượt đánh giá)</label></div>
            </div> -->
        </div>
    </div>
    
    <p>BEST SELING-ITEMS</p>
    <div class="boxspto">
        <div class="boxsp">
        <?php foreach($getProductBestSelling as $product): ?>
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
            
        <!-- <div class="sp">
            <div class="sale">23%</div>
            <img src="public/img/sp1.webp" alt="">
            <div class="tensp" ><label>2BAR BABY TEE - BLUE</label></div>
            <div class="price" >221,000₫ <del> 286,000₫</del></div>
            <div class="danhgia"><i class="fa-solid fa-star fa-2xs" style="color: #ff4d4f;"></i><i class="fa-solid fa-star fa-2xs" style="color: #ff4d4f;"></i><i class="fa-solid fa-star fa-2xs" style="color: #ff4d4f;"></i><i class="fa-solid fa-star fa-2xs" style="color: #ff4d4f;"></i><i class="fa-solid fa-star fa-2xs" style="color: #ff4d4f;"></i>
<label for="" style="font-size: 9px;">(1 lượt đánh giá)</label></div>
        </div>
            
            <div class="sp">
                <div class="sale">23%</div>
                <img src="public/img/sp1.webp" alt="">
                <div class="tensp" ><label>2BAR BABY TEE - BLUE</label></div>
                <div class="price" >221,000₫ <del> 286,000₫</del></div>
                <div class="danhgia"><i class="fa-solid fa-star fa-2xs" style="color: #ff4d4f;"></i><i class="fa-solid fa-star fa-2xs" style="color: #ff4d4f;"></i><i class="fa-solid fa-star fa-2xs" style="color: #ff4d4f;"></i><i class="fa-solid fa-star fa-2xs" style="color: #ff4d4f;"></i><i class="fa-solid fa-star fa-2xs" style="color: #ff4d4f;"></i>
<label for="" style="font-size: 9px;">(1 lượt đánh giá)</label></div>
            </div>
            <div class="sp">
                <div class="sale">23%</div>
                <img src="public/img/sp1.webp" alt="">
                <div class="tensp" ><label>2BAR BABY TEE - BLUE</label></div>
                <div class="price" >221,000₫ <del> 286,000₫</del></div>
                <div class="danhgia"><i class="fa-solid fa-star fa-2xs" style="color: #ff4d4f;"></i><i class="fa-solid fa-star fa-2xs" style="color: #ff4d4f;"></i><i class="fa-solid fa-star fa-2xs" style="color: #ff4d4f;"></i><i class="fa-solid fa-star fa-2xs" style="color: #ff4d4f;"></i><i class="fa-solid fa-star fa-2xs" style="color: #ff4d4f;"></i>
<label for="" style="font-size: 9px;">(1 lượt đánh giá)</label></div>
            </div>
            <div class="sp">
                <div class="sale">23%</div>
                <img src="public/img/sp1.webp" alt="">
                <div class="tensp" ><label>2BAR BABY TEE - BLUE</label></div>
                <div class="price" >221,000₫ <del> 286,000₫</del></div>
                <div class="danhgia"><i class="fa-solid fa-star fa-2xs" style="color: #ff4d4f;"></i><i class="fa-solid fa-star fa-2xs" style="color: #ff4d4f;"></i><i class="fa-solid fa-star fa-2xs" style="color: #ff4d4f;"></i><i class="fa-solid fa-star fa-2xs" style="color: #ff4d4f;"></i><i class="fa-solid fa-star fa-2xs" style="color: #ff4d4f;"></i>
<label for="" style="font-size: 9px;">(1 lượt đánh giá)</label></div>
            </div> -->
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
        <p>FEEDBACK</p>
<div class="ochuafb">
    <div class="feedback-section">
        <div class="khungfb1">
            <img src="public/img/fb1.jpg" alt="">
            <img src="public/img/fb2.webp" alt="">
        </div>
        <div class="khungfb2">
            <img src="public/img/fb3.webp" alt="" style="width: 100%; padding: 5px;">
            <div class="boxbefb">
            <img src="public/img/fb4.jpg" alt="" style="width: 50%; padding: 5px;">
            <img src="public/img/fb5.webp" alt="" style="width: 50%;padding: 5px;">
        </div>
        </div>
    </div>
</div>
    </article>
   
    
   