function arr_Detall(id) {
    sessionStorage.setItem('id_chitiet', id);
    location.href = "v_cart.php";
}

// Tải 4 sản phẩm đầu tiên vào trang
function loadProducts() {
    const loadspContainer = document.getElementById('loadsp');
    // Chỉ lấy 4 sản phẩm đầu tiên
    products.slice(0, 4).forEach(product => {
        const productHTML = `
            <div class="sp">
                <div class="sale">${product.sale}%</div>
                <a href="#" onclick="arr_Detall(${product.id})"><img src="public/img/${product.image}" alt="${product.name}"></a>
                <div class="tensp"><label>${product.name}</label></div>
                <div class="price">${product.price.toLocaleString()}₫ <del>${product.originalPrice.toLocaleString()}₫</del></div>
                <div class="danhgia">
                    ${'<i class="fa-solid fa-star fa-2xs"></i>'.repeat(product.rating)}
                    <label style="font-size: 9px;">(${product.reviews} lượt đánh giá)</label>
                </div>
            </div>
        `;
        loadspContainer.innerHTML += productHTML;
    });
}

// Tải 8 sản phẩm tiếp theo vào trang
function loadMoreProducts() {
    const loadspContainer = document.getElementById('loadspnew');
    // Chỉ lấy từ sản phẩm 5 đến 12
    products.slice(4, 12).forEach(product => {
        const productHTML = `
            <div class="sp">
                <div class="sale">${product.sale}%</div>
                <a href="#" onclick="arr_Detall(${product.id})"><img src="public/img/${product.image}" alt="${product.name}"></a>
                <div class="tensp"><label>${product.name}</label></div>
                <div class="price">${product.price.toLocaleString()}₫ <del>${product.originalPrice.toLocaleString()}₫</del></div>
                <div class="danhgia">
                    ${'<i class="fa-solid fa-star fa-2xs"></i>'.repeat(product.rating)}
                    <label style="font-size: 9px;">(${product.reviews} lượt đánh giá)</label>
                </div>
            </div>
        `;
        loadspContainer.innerHTML += productHTML;
    });
}

// Gọi hàm để tải sản phẩm khi trang được tải
window.onload = function() {
    loadProducts();      // Tải 4 sản phẩm đầu tiên
    loadMoreProducts();  // Tải 8 sản phẩm tiếp theo
};
