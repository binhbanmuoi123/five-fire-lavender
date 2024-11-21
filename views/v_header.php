<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="public/css/index.css">
    <link rel="stylesheet" href="public/css/header.css">
    <!-- <link rel="stylesheet" href="public/css/dangky.css"> -->
    <head>
  <?php
    if ($_GET['act'] == 'home') {
      echo '  <link rel="stylesheet" href="public/css/index.css">';
    } elseif ($_GET['mod'] == 'user') {
      echo ' <link rel="stylesheet" href="public/css/dangky.css">';
    }elseif ($_GET['mod'] == 'product') {
      echo ' <link rel="stylesheet" href="public/css/newarrival.css">';
    }
  ?>
</head>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <div class="dongdau">
            <p>
                Miễn phí vận chuyển với đơn hàng trên 500K. Hàng pre-order còn được giảm thêm 5%.</p>
        </div>
        <div class="container">
            <div class="container1">
                <div class="swe"><a href="?mod=page&act=home"><img src="public/img/logo.webp" alt=""></a></div>
                <div class="seach">
                    <input type="search" placeholder="Tìm kiếm sản phẩm...">
                    <button><i class="fa-solid fa-magnifying-glass" style="color: #ffffff;"></i></button>
                </div>
                <div class="login"><i class="fa-regular fa-user fa-xl" style="padding-top: 12px; margin-right: 10px;"></i>
                    <p>
    <a href="?mod=user&act=login">Đăng nhập / Đăng ký<br>Tài khoản của tôi</a>
</p>

</p>
</p></div>
                    <div class="cart"><i class="fa-solid fa-bag-shopping fa-xl" style="padding: 10px;"></i>
                    <p><a href="detail.html">giỏ hàng</a></p></div>
            </div>
        </div>
        <div class="khungchuamenu">
        <div class="menu">
        <ul>
    <li><a href="?mod=product&act=newarrival">new arrivals</a></li>
    <li><a href="?mod=product&act=bestselling">best-selling items</a></li>
    <li><a href="?mod=product&act=top">tops</a></li>
    <li><a href="?mod=product&act=bottom">bottoms</a></li>
    <li><a href="?mod=product&act=outerwear">outerwear</a></li>
    <li><a href="?mod=product&act=accessories">accessories</a></li>
    <li><a href="?mod=product&act=saleoff">sale off</a></li>
    <li><a href="?mod=product&act=flashsale">flash sale</a></li>
</ul>

        </div>
    </div>
    
    </header>