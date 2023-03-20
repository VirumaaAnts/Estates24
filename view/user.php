<?php
    ob_start();
?>
<div class="profile">
    <h2>User profile</h2>
    <div class="profile_img">
        <input type='file' name='picture' accept="image/png, image/jpeg, image/jpg" id='picture'>
        <?php 
            echo "<img src='./public/uploads/user_".$user['id']."/".$user['photo']."' alt=''>"
        ?>
    </div>
    <div class="data">
        <?php
        echo "
            <label for='name'>Name</label>
            <input type='text' name='name' placeholder='Name' class='form-control' value='".$user['name']." ".$user['surname']."' readonly>
            <label for='email'>Email</label>
            <input type='email' name='email' placeholder='Email' class='form-control' value='".$user['email']."' readonly>
            <label for='phone'>Phone</label>
            <input type='tel' name='phone' placeholder='Phone' class='form-control' value='".$user['phone']."' readonly>
            "
        ?>
    </div>
</div>
<?php
    $content = ob_get_clean();
    include 'view/templates/main.php';
?>