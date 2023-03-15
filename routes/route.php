<?php
    $host = explode('?', $_SERVER['REQUEST_URI']);
    // explode создает массив из одной строки, где ? играет роль разделителя
    $main = $host[0];
    // берет значение до ? (или весь путь если его нет)
    // если бы был ? то появились бы еще элементы массива(до и после ?)
    $num = substr_count($main, '/');
    // считает кол-во /
    $route = explode('/', $main)[$num];
    // берет строку после конечной папки полного пути засчет последнего /
    if(strstr($_SERVER['REQUEST_URI'], '?')) { //если найден символ '?'
        $id = urldecode($host[1]); //прочитаем значение после ? и уберем пробелы
    }
    if (isset($_SESSION['status'])) {
        if($route == 'addAdv') {
            RenderController::AdForm();
            return;
        }
        else if($route == 'profile') {
            RenderController::Profile();
            return;
        }
        else if($route == 'favourites') {
            RenderController::Favourites();
            return;
        }
        else if($route == 'editProfile') {
            SendController::EditProfile();
            return;
        }
        else if($route == 'logout') {
            SendController::Logout();
            return;
        }
        else if($route == 'createObj') {
            SendController::CreateObj();
            return;
        }
        // switch ($route) {
        //     case 'addAdv':
        //         RenderController::AdForm();
        //         break;
        //     case 'profile':
        //         RenderController::Profile();
        //         break;
        //     case 'favourites':
        //         RenderController::Favourites();
        //         break;
        //     case 'editProfile':
        //         SendController::EditProfile();
        //         break;
        //     case 'logout':
        //         SendController::Logout();
        //         break;
        //     case 'createObj':
        //         SendController::CreateObj();
        //         break;
        // }
    }
    if($route == 'index.php') {
        RenderController::start();
        return;
    }
    else if($route == '') {
        RenderController::start();
        return;
    }
    else if($route == 'registration') {
        RenderController::registrationForm();
        return;
    }
    else if($route == 'estates') {
        RenderController::AllEstates();
        return;
    }
    else if($route == 'offers') {
        RenderController::AllOffers();
        return;
    }
    else if($route == 'ad') {
        $userId = $_GET['user'];
        $adId = $_GET['ad'];
        $fav = null;
        if(isset($_GET['fav'])) {
            $fav = $_GET['fav'];
        }
        RenderController::Ad($adId, $userId, $fav);
        return;
    }
    // else if($route == 'addToFav') {
    //     SendController::AddToFav();
    //     header('Location:'.$_SERVER['HTTP_REFERER']);
    //     return;
    // }
    else if($route == 'loginRes') {
        SendController::login();
        return;
    }
    else if($route == 'register') {
        SendController::registration();
        return;
    }
    else if($route == 'macklers') {
        RenderController::Maklers();
        return;
    }
    else if($route == 'findByFilters') {
        RenderController::FilterPage();
        return;
    }

    else {
        RenderController::ErrorPage();
        return;
    }

    // switch ($route) {
    //     case 'index.php':
    //         RenderController::start();
    //         break;
    //     case '':
    //         RenderController::start();
    //         break;
    //     case 'registration':
    //         RenderController::registrationForm();
    //         break;
    //     case 'estates':
    //         RenderController::AllEstates();
    //         break;
    //     case 'offers':
    //         RenderController::AllOffers();
    //         break;
    //     case 'ad':
    //         $userId = $_GET['user'];
    //         $adId = $_GET['ad'];
    //         RenderController::Ad($adId, $userId);
    //         break;
    //     case 'loginRes':
    //         SendController::login();
    //         break;
    //     case 'register':
    //         SendController::registration();
    //         break;
    //     case 'macklers':
    //         RenderController::Maklers();
    //         break;
    //     case 'findByFilters':
    //         RenderController::FilterPage();
    //         break;
    // }
?>