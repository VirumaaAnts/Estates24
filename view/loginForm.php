<?php
    ob_start();
?>
<div class='login'>
    <h2>Вход</h2>
    <form action="loginRes" method='POST'>
        <label for="login">email</label>
        <input type="text" name="login" id="login" placeholder="Login" autofocus required>
        <label for="log_password">password</label>
        <input type="password" name='log_password' id='log_password' placeholder="password" required>
        <button type="submit" name = 'send'>Login</button>
        <p style="margin-top:10px;text-align:center">
            <?php if(isset($_SESSION['error'])) {echo $_SESSION['error']; unset($_SESSION['error']);} ?>
        </p>
    </form>
    <div class="registrationContainer"><a class="registration" href="registration">Регистрация</a></div>
</div>
<?php
    $content = ob_get_clean();
    include 'view/templates/main.php';
?>