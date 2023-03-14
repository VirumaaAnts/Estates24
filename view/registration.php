<?php
    ob_start();
?>
<div class="main_back">
    <img src="images/home_back.jpg" alt="">
</div>
<div id="registrationPage">
    <h1>Регистрация</h1>
    <form action= "register" method="POST" enctype="multipart/form-data">
        <div>
            <input type="text" class="form-control" name="name" required placeholder="Name" value=<?php if(isset($data[2][0])){echo '"'.$data[2][0].'"';}else { echo '""';};?> />
            <input type="text" class="form-control" name="surname" required placeholder="Surname"  value=<?php if(isset($data[2][1])){echo '"'.$data[2][1].'"';}else { echo '""';};?>  />
            <div class="input-group">
                <span class="input-group-text" id="basic-addon1">@</span>
                <input type="email" class="form-control" name="email" required placeholder="Email"  value=<?php if(isset($data[2][2])){echo '"'.$data[2][2].'"';}else { echo '""';};?> />
            </div>
            <input type="file" accept="image/png, image/jpeg, image/jpg" class="form-control" required name="file" />
        </div>
        <div>
            <input type="text" class="form-control" name="username" required placeholder="Username"  value=<?php if(isset($data[2][3])){echo '"'.$data[2][3].'"';}else { echo '""';};?> />
            <input type="password" class="form-control" name="password" required placeholder="Password"  value= ""  />
            <input type="tel" class="form-control" pattern="[0-9]{7,9}" name="phone" required placeholder="Phone" value=<?php if(isset($data[2][6])){echo '"'.$data[2][6].'"';}else { echo '""';};?>  />
            <input type="text" class="form-control" name="mackler" disabled placeholder="You don't have a mackler status" />
        </div>
        
        <div class="btn_container">
            <input type="submit" class="btn btn-primary" name="send" value="Submit" />
        </div>
    </form>
</div>
<?php
    $content = ob_get_clean();
    include 'view/templates/main.php';
?>