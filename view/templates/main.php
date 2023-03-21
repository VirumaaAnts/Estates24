<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <title>Estates24/7</title>
    
    <!-- Styles -->
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/default.css">
    <link rel="stylesheet" href="public/css/header.css">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous" defer></script>
    
    <!-- Jquery -->
    <script src="public/js/jquery.min.js"></script>

    <!-- Slider -->
    <script src="public/lib/slider/slider.js" ></script>
    <link rel="stylesheet" href="public/lib/slider/slider.css">

    <!-- Lightbox -->
    <script src="public/lib/lightbox/lightbox.js"></script>
    <link rel="stylesheet" href="public/lib/lightbox/lightbox.css">

    <!-- JavaScript -->
    <script src="public/js/app.js" defer></script>
    <script src="public/js/modal.js" defer></script>
    <script src="public/js/filter.js" defer></script>
    <script src="public/js/maklerPage.js" defer></script>
</head>
<body id = "body">
    <header>

        <div class="logo">
            <a href="index.php"><img src="images/logo.png" alt=""></a>
        </div>
        <?php
        if (isset($_SESSION['error'])) {
            echo $_SESSION['error'];
            unset($_SESSION['error']);
        } elseif (isset($error)) {
            echo $error;
            unset($error);
        }
        if (isset($message)) {
            echo $message;
        }
        ?>
        <div class="buttonContainer">
            <div class="linksContainer">
                <a href="macklers">Brokers</a>
            </div>
            <?php
            if (isset($_SESSION['status'])) {
                echo '
                    <div class="linksContainer">
                        <a href="profile">Profile</a>
                    </div>
                    <div class="favoritesContainer">
                        <a href="favorites"><img src="images/pngimg.com - like_PNG61.png" alt=""></a>
                    </div>
                ';
            }
            ?>
            <div>
                <?php
                if (!isset($_SESSION['status'])) {
                    echo '
                        <a class="addAdvToLog">Add advertisement</a>
                    ';
                } else {
                    echo '
                        <a class="addAdv" href="addAdv">Add advertisement</a>
                    ';
                }
                ?>
            </div>
            <?php
            if (isset($_SESSION['status'])) {
                echo '
                    <div class="loginContainer">
                        <a class="logout" href="logout">Log out</a>
                ';
            } else {
                echo '
                    <div class="loginContainer">
                        <a class="login">Log in</a>
                ';
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