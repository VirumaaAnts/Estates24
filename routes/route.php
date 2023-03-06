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
    else {}

    switch ($route) {
        case 'index.php':
            header('Location: /');
        case '':
            Controller::start();
            break;
        case 'main':
            Controller::start();
            break;
        case 'macklers':
            Controller::macklers();
            break;
        case 'loginRes':
            Controller::login();
            break;
        case 'registration':
            Controller::registration(null);
            break;
        case 'register':
            Controller::register();
            break;
        case 'estates':
            Controller::AllEstates();
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