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
            header('Location: /');
            break;
        case '':
            RenderController::start();
            break;
        case 'macklers':
            RenderController::macklers();
            break;
        case 'registration':
            RenderController::registration(null);
            break;
        case 'estates':
            RenderController::AllEstates();
            break;
        case 'ad':
            $userValue = explode('&', $host[1]);
            $userId = (int)str_replace('user=', '', $userValue[0]);
            $adId = (int)str_replace('ad=', '', $userValue[1]);
            RenderController::Ad($adId, $userId);
            break;
        case 'addAdv':
            RenderController::AdForm();
            break;
        case 'logout':
            SendController::Logout();
            break;
        case 'loginRes':
            SendController::login();
            break;
        case 'register':
            SendController::register();
            break;
        case 'maklers':
            RenderController::Maklers();
            break;
    }
    // if (isset($_SESSION['status'])) {
    //     if($route == 'logout'){
    //         Controller::Logout();
    //     }
    // } else{
    //     Controller::Start();
    // } 
?>