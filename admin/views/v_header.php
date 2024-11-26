<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="publics/css/style.css">
</head>
<body>
    <header>
        <a href="index.php?trang=index" class="logo">Admin<span>Panel</span></a>
        <nav>
            <ul>
                <a href="?mod=admin-home&act=home">home</a>
                <a href="?mod=admin-product&act=product">products</a>
                <a href="index.php?trang=orders">orders</a>
                <a href="?mod=admin-admin&act=admin">admins</a>
                <a href="?mod=admin-user&act=user">users</a>
                <a href="index.php?trang=messages">messages</a>
            </ul>
        </nav>
        <div class="icons">
            <input type="checkbox" name="" id="user-btn">
            <label for="user-btn"class="fas fa-user"></label>
            <div class="box-user">
                <h1>admin</h1>
                <div class="div-button">
                <button-u><a href="index.php?trang=update_pr">update profile</a></button-u>
                </div>
                <div class="div-button">
                <button-1><a href="index.php?trang=register">register</a></button-1>
                <button-1><a href="index.php?trang=login">login</a></button-1>
                </div>
                <div class="div-button">
                <button-d><a href="index.php?trang=login">logout</a></button-d>
                </div>
            </div>
        </div>
    </header>