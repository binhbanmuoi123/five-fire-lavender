<main>
        <div class="container">
            <h1> ADMIN ACCOUNTS</h1>
            <div class="box-container">
                <div class="box-c">
                    <p>add new admin</p>
                    <div class="div-button">
                        <button-r><a href="?mod=admin-admin&act=register">Register admin</a></button-r>
                    </div>
                </div>
                <?php foreach($getAdmin as $user): ?>
                <div class="box-c">
                    <p>user id : <span><?= $user['id']?></span></p>
                    <p>user name : <span><?= $user['name']?></span></p>
                    <p>email : <span><?= $user['email']?></span></p>
                  
                </div>
                <?php endforeach;?>
            </div>
        </div>
    </main>
</body>
</html>