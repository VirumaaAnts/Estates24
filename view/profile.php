<?php
    ob_start();
?>
<script src="public/js/pofile.js"></script>
<form action="" class="profile">
    <h2>Update profile</h2>
    <div class="profile_img">
        <input type="file" name="picture" id="pictrure">
        <img src="./public/uploads/user_1/profile.jpeg" alt="">
    </div>
    <div class="datas">
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="surname" placeholder="Surname">
        <input type="text" name="username" placeholder="Username">
        <input type="email" name="email" placeholder="Email">
        <input type="tel" name="phone" placeholder="Phone">
        <input type="text" name="password" placeholder="Password">
        <button>Update</button>
    </div>
</form>
<?php
    $content = ob_get_clean();
    include 'view/templates/main.php';
?>