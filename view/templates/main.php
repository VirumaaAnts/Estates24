<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/table.css">
    <link rel="stylesheet" href="public/css/loginLogout.css">
    <link rel="stylesheet" href="public/css/insert.css">
    <link rel="stylesheet" href="public/css/update.css">
    <link rel="stylesheet" href="public/css/delete.css">
    <script src="public/js/app.js"></script>
    <title>People</title>
</head>
<body>
    <header>
        <h1>People</h1>
        <?php
            if(isset($_SESSION['status'])){
                echo '<p style="text-align:center;text-transform:uppercase">Signed as<br><b>'.$_SESSION['role'].'</b></p>';
            }
        ?>
        <div>
            <?php
                if(isset($_SESSION['status'])){
                    echo '<a class="logout" href="logout">logout</a>';
                }
            ?>
        </div>
    </header>
    <main>
        <?php
            if(isset($content)){
                echo $content;
            }
        ?>
    </main>
</body>
</html>