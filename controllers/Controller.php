<?php
class Controller
{
    public static function start()
    {
        include_once 'view/main.php';
    }
    public static function registration() {
        include_once 'view/registration.php';
    }
    public static function register()
    {
        $result = ModelRegistration::register();
        if($result) {
            header('Location:registration');
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
            $_SESSION['error'] = 'Ошибка ввода данных';
        }
    }
}
?>