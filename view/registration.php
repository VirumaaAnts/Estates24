<?php
    ob_start();
    if(isset($message) && $message != null) {
        echo '<p>' . $message . '</p>';
    }
?>
<form action="register" method="POST" enctype="multipart/form-data">
    <input type="text" value="" name="name" placeholder="Name" required />
    <input type="text" value="" name="surname" placeholder="Surname" required />
    <input type="email" value="" name="email" placeholder="Email" required />
    <input type="text" value="" name="login" placeholder="Login" required />
    <input type="password" value="" name="password" placeholder="Password" required />
    <input type="file" value="" name="file" required />
    <input type="submit" name="send" value="Submit" />
</form>
<?php
    $content = ob_get_clean();
    include 'view/templates/main.php';
?>