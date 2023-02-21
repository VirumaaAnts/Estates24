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
    if(strstr($_SERVER['REQUEST_URI'], '?')){ //если найден символ '?'
        $id = urldecode($host[1]); //прочитаем значение после ? и уберем пробелы
    }
    if($route == 'index.php' OR $route == ''){
        Controller::Start();
    }
    elseif ($route == 'loginRes'){
        Controller::Login();
    }
    if (isset($_SESSION['status'])) {
        // if($route == 'logout'){
        //     Controller::Logout();
        // }
    }else{
        Controller::Start();
    } 
?>