<?php
class SendController
{
    public static function registration()
    {
        $data = ModelRegistration::register();
        $message = $data[1];
        include_once 'view/registration.php';
    }
    public static function EditProfile() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $response = ModelUser::editProfile();
            if($response == true) {
                $_SESSION['error'] = "<p style='color:green;font-weight:900;margin-left:20px'>Данные успешно изменены!</p>";
            }else{
                $_SESSION['error'] = "<p style='color:red;font-weight:900;margin-left:20px'>Попытка неудачна!</p>";
            }
        }
    }
    public static function deleteProfile() {
        $response = ModelUser::deleteProfile();
        if($response == true) {
            $_SESSION['error'] = "<p style='color:green;font-weight:900;margin-left:20px'>Данные успешно удалены!</p>";
        }else{
            $_SESSION['error'] = "<p style='color:red;font-weight:900;margin-left:20px'>Попытка неудачна!</p>";
        }
    }
    public static function deleteAd()
    {
        $response = ModelAd::deleteAd();
        if($response == true) {
            $_SESSION['error'] = "<p style='color:green;font-weight:900;margin-left:20px'>Объявление успешно удалено!</p>";
            header('Location: ./profile');
        }else{
            $_SESSION['error'] = "<p style='color:red;font-weight:900;margin-left:20px'>Попытка неудачна!</p>";
            header('Location: ./profile');
        }
    }
    public static function Login()
    {
        $test = ModelUser::checkUser();
        if ($test[0]) {
            $_SESSION['error'] = "<p style='color:green;font-weight:900;margin-left:20px'>Успешный вход!</p>";
            header('Location: .');
        } else {
            $_SESSION['error'] = "<p style='color:red;font-weight:900;margin-left:20px'>Ошибка ввода данных!</p>";
            $email = $test[1];
            header('Location: .');
        }
    }
    public static function Logout(){
        ModelUser::UserLogout();
        $_SESSION['error'] = "<p style='color:black;font-weight:900;margin-left:20px'>Вы вышли жестко!</p>";
        // if(header('Location: .')){
        //     session_destroy();
        // }
        if(header('Location:'.$_SERVER['HTTP_REFERER'])){
            session_destroy();
        }
    }
    public static function CreateObj(){
        $obj = ModelAd::createAdv();
        header('Location: .');
    }
    public static function EditAd(){
        $obj = ModelAd::EditAd();
        $id = hash('ripemd160', $obj);
        header("Location: /editPageAd?ad=$id");
    }
}
?>