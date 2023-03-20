<?php
    ob_start();
?>
<script src="public/js/profile.js"></script>
<form action="editProfile" method="POST" class="profile" enctype="multipart/form-data">
    <h2>Profile</h2>
    <div class="profile_img">
        <input type='file' name='picture' accept="image/png, image/jpeg, image/jpg" id='picture'>
        <?php 
            echo "<img src='./public/uploads/user_".$userInfo['id']."/".$userInfo['photo']."' alt=''>"
        ?>
    </div>
    <div class="data">
        <?php
        echo "
            <input type='text' name='prev_picture' value='".$userInfo['photo']."' style='display: none'>
            <input type='text' name='name' placeholder='Name' class='form-control' value='".$userInfo['name']."'>
            <input type='text' name='surname' placeholder='Surname' class='form-control' value='".$userInfo['surname']."'>
            <input type='text' name='username' placeholder='Username' class='form-control' value='".$userInfo['username']."'>
            <input type='email' name='email' placeholder='Email' class='form-control' value='".$userInfo['email']."'>
            <input type='tel' name='phone' placeholder='Phone' class='form-control' value='".$userInfo['phone']."'>
            <input type='password' name='password' placeholder='Password' class='form-control'>
            "
        ?>
        <button class="btn btn-primary" id="changeProfile" name="update">Update</button>
        <hr>
        <button class="btn btn-danger" id="deleteProfile" name="delete">Delete</button>
    </div>
</form>
<div class="user_ads">
    <h2>My advertisements</h2>
    <?php
    if(is_iterable($userAds)) {
        foreach ($userAds[0] as $estate) {
            $id = hash('ripemd160', $estate["id"]);
            echo "
            <div class='estate' page='ad?user=".$estate['ownerId']."&ad=".$estate['id']."'>
                <div class='slider' show='1' scroll='1' time='200'>
                    <ul>
                        ";
                            foreach ($userAds[1] as $photo) {
                                if($photo['houseId'] == $estate['id']) {
                                    echo "
                                        <li>
                                            <a href='public/uploads/user_".$estate['ownerId']."/ad_".$estate['id']."/".$photo['photo']."' data-lightbox='user1-9' data-title='".$photo['description']."'>
                                                <div class='img_slider' style='background-image: url(public/uploads/user_".$estate['ownerId']."/ad_".$estate['id']."/".$photo['photo'].");'></div>
                                            </a>
                                        </li>
                                    ";
                                }
                            }
                        echo "
                    </ul>
                </div>
                <div class='inf'>
                    <div class='inf_text'>
                        <h3>".$estate['address']."</h3>
                        <p><span>City:</span> ".$estate['city']."</p>
                        <p><span>Price:</span> ".$estate['price']." €</p>
                    </div>
                </div>
                <div class='btn_container'>
                    
                    <a class='btn btn-primary' href='editPageAd?ad=$id'>Edit</a>
                    <a class='btn btn-danger' href='deleteAd'>Delete</a>
                </div>
            </div>
            ";
        }
    } else {
        echo "<p class='no_favorites'>You do not have favorite estates yet.</p>";
    }
    ?>
</div>
<?php
    $content = ob_get_clean();
    include 'view/templates/main.php';
?>