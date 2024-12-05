<div class="boxduongdan">
        <div class="duongdan">
            <span>Trang chủ</span>
            <span>/</span>
            <span>Danh mục</span> 
            <span>/</span>
            <span>NEW ARRIVALS </span>
        </div>
    </div>  
   
    <div class="container-default">
        <h1>NEW ARRIVALS   <div class="filter-item-popular">
            <label>
                <select>
                    <option>SẮP XẾP</option>
                    <option>A-Z</option>
                    <option>GIÁ TĂNG DẦN</option>
                    <option>GIÁ GIẢM DẦN</option>
                </select>
            </label>
        </div></h1> 
    <div class="filter-container">
        <div class="filter">
            <span class="filter-icon"><i class="fa-solid fa-filter"></i></span>
            <span style="margin-right: 10px;">BỘ LỌC</span>
            <span>|</span>
        </div>
        <div class="filter-item-gia">
            <label>
                <select>
                    <option>GIÁ SẢN PHẨM</option>
                    <option>Dưới 150.000đ</option>
                    <option>Từ 150.000đ đến 200.000đ</option>
                    <option>Từ 350.000đ đến 500.000đ</option>
                    <option>Trên 500.000đ</option>
                </select>
            </label>
        </div>
        <div class="filter-item-size">
            <label>
                <select>
                    <option>KÍCH THƯỚC</option>
                    <option>Small</option>
                    <option>Medium</option>
                    <option>Large</option>
                </select>
            </label>
        </div>
      
    </div>
    <div class="boxspto">
        <div class="boxsp">
        <?php foreach($getProductNewArrival as $product): ?>
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