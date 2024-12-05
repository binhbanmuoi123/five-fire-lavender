<main>
        <div class="container">
            <h1> ADMIN ACCOUNTS</h1>
            <div class="box-container">
                <div class="box-c">
                    <p>add new admin</p>
                    <div class="div-button">
                        <button-r><a href="?mod=admin-category&act=add">Add Category</a></button-r>
                    </div>
                </div>
                <?php foreach($getAllCategory as $dm): ?>
                <div class="box-c">
                    <p>Id category: <span><?= $dm['id']?></span></p>
                    <p>Name category: <span><?= $dm['name']?></span></p>
                    <p>Status : <span><?= $dm['status']?></span></p>
                    <p>Day create: <span><?= $dm['day_Create']?></span></p>
                    <div class="div-button">
                        <button-t><a href="?mod=admin-category&act=edit&id=<?= $dm['id']?>">Edit</a></button-t>
                    </div>
                </div>
                
                
                <?php endforeach;?>
            </div>
        </div>
    </main>
</body>
</html>