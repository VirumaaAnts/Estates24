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
    
    switch ($route) {
        case 'index.php':
            RenderController::start();
            break;
        case '':
            RenderController::start();
            break;
        case 'registration':
            RenderController::registrationForm();
            break;
        case 'estates':
            RenderController::AllEstates();
            break;
        case 'offers':
            RenderController::AllOffers();
            break;
        case 'ad':
            $userId = $_GET["user"];
            $adId = $_GET["ad"];
            RenderController::Ad($adId, $userId);
            break;
        case 'loginRes':
            SendController::login();
            break;
        case 'register':
            SendController::registration();
            break;
        case 'macklers':
            RenderController::Maklers();
            break;
        case 'findByFilters':
            RenderController::FilterPage();
            break;
    }
    if (isset($_SESSION['status'])) {
        switch ($route) {
            case 'addAdv':
                RenderController::AdForm();
                break;
            case 'profile':
                RenderController::Profile();
                break;
            case 'editProfile':
                SendController::EditProfile();
                break;
            case 'logout':
                SendController::Logout();
                break;
            case 'createObj':
                SendController::CreateObj();
                break;
        }
    }
?>