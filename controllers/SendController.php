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
    public static function Login()
    {
        $test = ModelUser::checkUser();
        if ($test) {
            $_SESSION['error'] = "<p style='color:green;font-weight:900;margin-left:20px'>Успешный вход!</p>";
            header('Location:'.$_SERVER['HTTP_REFERER']);
        } else {
            $_SESSION['error'] = "<p style='color:red;font-weight:900;margin-left:20px'>Ошибка ввода данных!</p>";
            header('Location:'.$_SERVER['HTTP_REFERER']);
        }
    }
    public static function Logout(){
        ModelUser::UserLogout();
        $_SESSION['error'] = "<p style='color:black;font-weight:900;margin-left:20px'>Вы вышли жестко!</p>";
        if(header('Location:'.$_SERVER['HTTP_REFERER'])){
            session_destroy();
        }
    }
}
?>