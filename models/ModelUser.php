<?php
class ModelUser
{
    // password_hash($password, PASSWORD_DEFAULT);
    public static function checkUser()
    {
        $test = false;
        $logFromForm = strtolower($_POST['login']);
        $database = new database();
        $response = $database->getOne('SELECT * from users WHERE login = "' . $logFromForm . '"');
        if ($response != null) {
            if ($response['login'] == $logFromForm && $response['password'] == password_verify($_POST['log_password'], $response['password'])) {
                $_SESSION['status'] = session_id();
                $_SESSION['email'] = $response['email'];
                $_SESSION['name'] = $response['name'];
                $_SESSION['surname'] = $response['surname'];
                $_SESSION['userId'] = $response['id'];
                $_SESSION['login'] = $response['login'];
                $_SESSION['photo'] = $response['photo'];
                $test = true;
            }
        } else {
            $test = false;
        }
        return $test;
    }
    public static function UserLogout()
    {
        unset($_SESSION['status']);
        unset($_SESSION['userId']);
        unset($_SESSION['email']);
        unset($_SESSION['name']);
        unset($_SESSION['surname']);
        unset($_SESSION['login']);
        unset($_SESSION['photo']);
        unset($_SESSION['error']);
        session_destroy();
        return;
    }
}
?>