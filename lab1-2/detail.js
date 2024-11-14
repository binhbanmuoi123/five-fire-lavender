function loadProductDetail() {
    const productId = sessionStorage.getItem('id_chitiet');
    const product = products.find(p => p.id == productId);

    if (product) {
        const productHTML = `<div class="boxanh">
        <div class="anhsanpham">
            <img src="${product.image}" alt="${product.name}" onclick="changeImage('${product.image}')">
            <img src="${product.image2}" alt="${product.name}" onclick="changeImage('${product.image2}')">
            <img src="${product.image3}" alt="${product.name}" onclick="changeImage('${product.image3}')">
            <img src="${product.image4}" alt="${product.name}" onclick="changeImage('${product.image4}')">
            <img src="${product.image5}" alt="${product.name}" onclick="changeImage('${product.image5}')">
            <img src="${product.image6}" alt="${product.name}" onclick="changeImage('${product.image6}')">
            <img src="${product.image7}" alt="${product.name}" onclick="changeImage('${product.image7}')">
        </div>
        <div class="anhspto">
            <img id="largeImage" src="${product.image}" alt="${product.name}">
        </div>
    </div>
    <div class="boxmota">
        <div class="mota">
            <label for="" style="font-weight: bold; font-size: 19px;">${product.name}</label>
            <div class="danhgia">${'<i class="fa-solid fa-star fa-2xs"></i>'.repeat(product.rating)}
                <label for="" style="font-size: 14px;">(${product.reviews} lượt đánh giá)</label></div>
            <div class="danhgia"><label for="" style="font-size: 14px;">SKU: KIDAOWHS</label></div>
            <hr>    
            <div class="price">
                <div class="giamgia">${product.sale}%</div>
                <label style="padding: 5px; font-weight: bold;">
                ${product.price.toLocaleString()}₫ <del>${product.originalPrice.toLocaleString()}₫</del></label>
            </div>
            <hr>
            <div class="sizes">
                <span>S</span> <span>M</span> <span>L</span> <span>XL</span>
            </div>
            <hr>
            <div class="soluong">
                <button type="button">-</button>
                <input type="text" id="quantity" value="1" readonly>
                <button type="button">+</button>
            </div>
            <div class="themvaogiohang">
                <button type="button">THÊM VÀO GIỎ</button>
            </div>
            <div class="thongso">
                <b style="font-size: 14px;">Mô tả</b><br>
                <label for="">| SWE® | KID TEE <br>
                    COLOR: WHITE <br>
                    MATERIAL: COTTON 100% <br>
                    SIZE: S/M/L/XL <br><br>
                    KID TEE - Là một trong những mẫu áo thun bán chạy nhất tại SWE với thông điệp "A KID FROM SPACE". Mẫu áo thun có form áo ÂU MỸ sử dụng chất liệu COTTON 100% - 2 CHIỀU, định lượng 250gsm, thông điệp cùng logo được THÊU XÙ màu đỏ và xử lý để tránh tình trạng không bị lem màu khi giặt.
                <br><br>Form áo được Fit size theo form và tiêu chuẩn tương đối của người Việt Nam, nếu bạn đang cân nhắc giữa hai size, nên chọn size lớn hơn. <br>
                Size S: Chiều cao dưới 1m65, cân nặng dưới 55kg <br>
                Size M: Chiều cao từ 1m65 - 1m75, cân nặng dưới 65kg <br>
                Size L: Chiều cao từ 1m75 - 1m85, cân nặng dưới 90kg <br>
                Size XL: Chiều cao từ 1m85 trở lên, cân nặng dưới 120kg <br><br> 
                Các bạn vui lòng tham khảo bảng size chart trước khi đặt hàng. <br>
                * Lưu ý: Hạn chế sử dụng máy sấy nhiệt cao để giữ form áo. <br>
                NOW AVAILABLE ONLINE & IN - STORE</label>
            </div>
            <div class="anhthongso">
                <img src="img/size.jpg" alt="">
            </div>
        </div>
    </div>
    `;

        document.getElementById('loaddetail').innerHTML = productHTML;
    } else {
        console.log("Sản phẩm không tồn tại");
    }
}

function changeImage(imageSrc) {
    const largeImage = document.getElementById('largeImage');
    largeImage.src = imageSrc;
}

// Gọi hàm khi trang chi tiết được tải
window.onload = loadProductDetail;
