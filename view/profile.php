<?php
    ob_start();
?>
<form action="" class="profile">
    <h2>Update profile</h2>
    <div class="profile_img">
        <input type="file" name="picture" id="pictrure">
        <?php 
            echo "<img src='./public/uploads/user_".$userInfo['id']."/".$userInfo['photo']."' alt=''>"
        ?>
    </div>
    <div class="datas">
        <?php
        echo "
            <input type='text' name='name' placeholder='Name' class='form-control' value='".$userInfo['name']."'>
            <input type='text' name='surname' placeholder='Surname' class='form-control' value='".$userInfo['surname']."'>
            <input type='text' name='username' placeholder='Username' class='form-control' value='".$userInfo['username']."'>
            <input type='email' name='email' placeholder='Email' class='form-control' value='".$userInfo['email']."'>
            <input type='tel' name='phone' placeholder='Phone' class='form-control' value='".$userInfo['phone']."'>
            <input type='password' name='password' placeholder='Password' class='form-control'>
            "
        ?>
        <button class="btn btn-primary">Update</button>
    </div>
</form>
<?php
    $content = ob_get_clean();
    include 'view/templates/main.php';
?>