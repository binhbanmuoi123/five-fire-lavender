<h1>Update Product</h1>
<form action="?mod=admin-product&act=update" method="post" enctype="multipart/form-data">
    <!-- Lưu ID sản phẩm -->
    <input type="hidden" name="id" value="<?=$productEdit['id']?>">

    <!-- Lưu đường dẫn các ảnh hiện tại -->
    <input type="hidden" name="current_image_01" value="<?=$productEdit['image_01']?>">
    <input type="hidden" name="current_image_02" value="<?=$productEdit['image_02']?>">
    <input type="hidden" name="current_image_03" value="<?=$productEdit['image_03']?>">
    <input type="hidden" name="current_image_04" value="<?=$productEdit['image_04']?>">

    <div class="image-preview">
        <img style="width: 100%;" src="publics/img/<?=$productEdit['image_01']?>" alt="Product Image">
    </div>
    <div class="thumbnail-images">
        <img src="publics/img/<?=$productEdit['image_02']?>" alt="Thumbnail 1">
        <img src="publics/img/<?=$productEdit['image_03']?>" alt="Thumbnail 2">
        <img src="publics/img/<?=$productEdit['image_04']?>" alt="Thumbnail 3">
    </div>

    <div class="flex">
        <div class="inputbox">
            <p>Update Name</p>
            <input class="boxinput" type="text" name="name" value="<?=$productEdit['name']?>" required>
        </div>
        <div class="inputbox">
            <p>Update Price</p>
            <input class="boxinput" type="number" name="price" value="<?=$productEdit['price']?>" required>
        </div>
        <div class="inputbox">
            <p>Update Old Price</p>
            <input class="boxinput" type="number" name="oldprice" value="<?=$productEdit['oldprice']?>">
        </div>
    </div>
    <div class="inputbox">
        <p>Update Details</p>
        <textarea class="boxinput" name="description" rows="3"><?=$productEdit['description']?></textarea>
    </div>
    <div class="flex">
        <div class="inputbox">
            <p>Update Image 01</p>
            <input class="boxinput" type="file" name="image_01">
        </div>
        <div class="inputbox">
            <p>Update Image 02</p>
            <input class="boxinput" type="file" name="image_02">
        </div>
        <div class="inputbox">
            <p>Update Image 03</p>
            <input class="boxinput" type="file" name="image_03">
        </div>
        <div class="inputbox">
            <p>Update Image 04</p>
            <input class="boxinput" type="file" name="image_04">
        </div>
        <div class="inputbox">
            <p>Update Status</p>
            <input class="boxinput" type="text" name="status" value="<?=$productEdit['status']?>">
        </div>
        <div class="inputbox">
            <p>Update Categories</p>
            <input class="boxinput" type="text" name="categories_id" value="<?=$productEdit['categories_id']?>">
        </div>
    </div>

    <div class="buttons">
        <button class="update-btn" type="submit">Update</button>
        <button class="back-btn" type="button" onclick="window.history.back()">Go Back</button>
    </div>
</form>
