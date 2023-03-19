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
        else if($route == 'favorites') {
            RenderController::Favorites();
            return;
        }
        else if($route == 'editProfile') {
            SendController::EditProfile();
            return;
        }
        else if($route == 'deleteProfile') {
            SendController::deleteProfile();
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
        RenderController::Ad();
        return;
    }
    else if($route == 'loginRes') {
        SendController::login();
        return;
    }
    else if($route == 'register') {
        SendController::registration();
        return;
    }
    else if($route == 'macklers') {
        RenderController::Macklers();
        return;
    }
    else if($route == 'findByFilters') {
        RenderController::FilterPage();
        return;
    }
    // else if($route == 'error404') {
    //     RenderController::ErrorPage();
    // }

    else {
        // header('Location: ./error404');
        header('Location: .');
        return;
    }
?>