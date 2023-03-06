<?php
class SendController
{
    public static function register()
    {
        $data = ModelRegistration::register();
        if($data[0]) {
            RenderController::registration($data[1]);
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