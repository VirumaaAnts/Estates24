<?php
class ModelUser
{
    // password_hash($password, PASSWORD_DEFAULT);
    public static function checkUser()
    {
        $test = false;
        $emailFromForm = strtolower($_POST['email']);
        $database = new database();
        $response = $database->getOne('SELECT * from user WHERE email = "' . $emailFromForm . '"');
        if ($response != null) {
            if ($response['email'] == $emailFromForm && $response['password'] == password_verify($_POST['log_password'], $response['password'])) {
                $_SESSION['status'] = session_id();
                $_SESSION['userId'] = $response['id'];
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
        return;
    }
}
?>