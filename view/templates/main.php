<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/header.css">
    <!-- <script src="public/js/app.js"></script> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <title>Estates24/7</title>
</head>
<body id = "body">
    <header>

        <div class="logo">

            <div class="imgHeader">
                <img src="images/621b8ec9f9fd4955bc17fb7fa56d19a4 (1).avif" alt="">
            </div>

            <h1>Estates 24/7</h1>

        </div>

        <div class="buttonContainer">

            <div class="linksContainer">
                <a href="macklers">Маклеры</a>
            </div>

            <div class="favouritesContainer">
                <a href="favourites"><img src="images/pngimg.com - like_PNG61.png" alt=""></a>
            </div>

            <a href="addAdv">Добавить объявление</a>

            <?php
                if (isset($_SESSION['status'])) {
                    
                } else{
                    echo '<div class="loginContainer"><a id="login" class="login" href="loginForm">Войти</a></div>';
                }
            ?>

        </div>

    </header>
    <main>
        <?php
            if (isset($content)) {
                echo $content;
            }
        ?>
    </main>
</body>
</html>