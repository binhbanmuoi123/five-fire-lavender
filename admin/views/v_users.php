<main>
        <div class="container">
            <h1> USER ACCOUNTS</h1>
            <div class="box-container">
                <?php foreach($getUser as $user): ?>
                <div class="box-c">
                    <p>user id : <span><?= $user['id']?></span></p>
                    <p>user name : <span><?= $user['name']?></span></p>
                    <p>email : <span><?= $user['email']?></span></p>
                    <p>Phone : <span><?= $user['phone']?></span></p>
                    <p>Address : <span><?= $user['address']?></span></p>
                  
                </div>
                <?php endforeach;?>
                <!-- <div class="box-c">
                    <p>user id : <span>2</span></p>
                    <p>user name : <span>trương trí trung</span></p>
                    <p>email : <span>truongtritrung1801@gmail.com</span></p>
                    <div class="div-button">
                        <button-d>Delete</button-d>
                    </div>
                </div>
                <div class="box-c">
                    <p>user id : <span>3</span></p>
                    <p>user name : <span>vinh</span></p>
                    <p>email : <span>123trongvinh456@gmail.com</span></p>
                    <div class="div-button">
                        <button-d>Delete</button-d>
                    </div>
                </div> -->
                
                </div>
            </div>
        </div>
    </main>
</body>
</html>