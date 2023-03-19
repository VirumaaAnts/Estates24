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
        <button class="btn btn-primary" id = "changeProfile" name="update">Update</button>
        <hr>
        <input type="button" class="btn btn-danger" id = "deleteProfileCheck" name="deleteCheck" value="Delete">
    </div>
</form>
<?php
    $content = ob_get_clean();
    include 'view/templates/main.php';
?>