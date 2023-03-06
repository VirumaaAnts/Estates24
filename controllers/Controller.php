<?php
class Controller
{
    public static function start(){
        include_once 'view/main.php';
    }
    public static function macklers() {
        include_once 'view/macklers.php';
    }
    public static function AllEstates() {
        
        include_once 'view/estates.php';
    }
    public static function registration($msg){
        $message = $msg;
        include_once 'view/registration.php';
    }
    public static function register()
    {
        $data = ModelRegistration::register();
        if($data[0]) {
            Controller::registration($data[1]);
        } else {
            $_SESSION['error'] = 'Ошибка регистрации!';
        }
    }
    public static function login()
    {
        $test = ModelUser::checkUser();
        if ($test) {
            header('Location:mainLogin');
        } else {
            $_SESSION['error'] = 'Ошибка ввода данных!';
        }
    }
}
?>