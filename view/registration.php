<?php
    ob_start();
    if(isset($message) && $message != null) {
        echo '<p>' . $message . '</p>';
    }
?>
<div id="registrationPage">
    <h1>Регистрация</h1>
    <form action="register" method="POST" enctype="multipart/form-data">
        <div>
            <input type="text" value="" class="form-control" name="name" placeholder="Name" required />
            <input type="text" value="" class="form-control" name="surname" placeholder="Surname" required />
            <div class="input-group">
                <span class="input-group-text" id="basic-addon1">@</span>
                <input type="email" value="" class="form-control" name="email" placeholder="Email" required />
            </div>
            <input type="file" value="" class="form-control" name="file" required />
        </div>
        <div>
            <input type="text" value="" class="form-control" name="username" placeholder="Username" required />
            <input type="password" value="" class="form-control" name="password" placeholder="Password" required />
            <input type="phone" value="" class="form-control" name="phone" placeholder="Phone" required />
            <input type="text" value="" class="form-control" name="mackler" placeholder="You don't have a mackler status" disabled />
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