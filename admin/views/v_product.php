<main>
        <div class="container">
            <h1>ADD PRODUCT</h1>
            <form action="?mod=admin-product&act=add" method="post" enctype="multipart/form-data">
    <div class="flex">
        <div class="inputbox">
            <p>Product Name (required)</p>
            <input type="text" name="name" class="boxinput" placeholder="Enter product name" required>
        </div>
        <div class="inputbox">
            <p>Product Price (required)</p>
            <input type="number" name="price" class="boxinput" placeholder="Enter product price" required>
        </div>
        <div class="inputbox">
            <p>Product Sale Price (required)</p>
            <input type="number" name="oldprice" class="boxinput" placeholder="Enter product sale price" required>
        </div>
        <div class="inputbox">
            <p>Image 01 (required)</p>
            <input type="file" name="image_01" class="boxinput" required>
        </div>
        <div class="inputbox">
            <p>Image 02 (optional)</p>
            <input type="file" name="image_02" class="boxinput">
        </div>
        <div class="inputbox">
            <p>Image 03 (optional)</p>
            <input type="file" name="image_03" class="boxinput">
        </div>
        <div class="inputbox">
            <p>Image 04 (optional)</p>
            <input type="file" name="image_04" class="boxinput">
        </div>
        <div class="inputbox">
            <p>Product Category (required)</p>
            <input name="categories_id" class="boxinput" required>
               
            </input>
        </div>
        <div class="inputbox">
            <p>Product Status (required)</p>
            <input name="status" class="boxinput" required>
         
            </input>
        </div>
        <div class="inputbox">
            <p>Product Details (required)</p>
            <input name="description" class="boxinput" placeholder="Enter product details" required>
        </div>
    </div>
    <button type="submit">Add Product</button>
</form>

        </div>
        <div class="container">
            <h1>PRODUCTS ADDED</h1>
            <table>
                <thead>
                    <tr>
                    <th>Iddm</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Category</th>
                    <th>status</th>
                    <th>Custom</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($getAllProduct as $sp): ?>
                    <tr>
                        <td><?=$sp['id']?></td>
                        <td><img src="publics/img/<?=$sp['image_01']?>" alt="" srcset=""></td>
                        <td><?=$sp['name']?></td>
                        <td><?=$sp['oldprice']?> <span>VND</span><br> <?=$sp['price']?> <span>VND</span></td>
                
                        <td><?=$sp['category_name']?></td>
                        <td><?=$sp['status']?></td>
                        <td>
                            <div class="iconsp">
    <a href="?mod=admin-product&act=edit&id=<?=$sp['id']?>" class="fas fa-edit"></a>
    <a href="?mod=admin-product&act=delete&id=<?=$sp['id']?>"
       onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?');" 
       class="fas fa-trash-alt"></a>
</div>

                        </td>
                    </tr>
                        <?php endforeach; ?>
                        
                </tbody>
            </table>
        </div>
    </main> 