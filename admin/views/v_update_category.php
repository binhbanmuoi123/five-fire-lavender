<h1>Update Product</h1>
<div class="form2"><form action="?mod=admin-category&act=update" method="post"  enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?=$getCategoryById['id']?>">


    <div class="flex">
        <div class="inputbox">
            <p>Update Category</p>
            <input class="boxinput" type="text" name="name" value="<?=$getCategoryById['name']?>" required>
        </div>
        <div class="inputbox">
            <p>Status</p>
            <input class="boxinput" type="text" name="status" value="<?=$getCategoryById['status']?>" required>

        </div>
        
    <div class="inputbox">
        

    <div class="buttons">
        <button class="update-btn" type="submit" >Update</button>
        <button class="back-btn" type="button" onclick="window.history.back()">Go Back</button>
    </div>
</form>
</div>