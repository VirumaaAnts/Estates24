<?php
class ModelUser
{
    // password_hash($password, PASSWORD_DEFAULT);
    public static function checkUser()
    {
        $test = false;
        $user = $_POST['user'];
        $database = new database();
        $response = $database->getOne('SELECT * from user WHERE email = "' . $user . '"');
        $response2 = $database->getOne('SELECT * from user WHERE username = "' . $user . '"');
        if ($response != null || $response2 != null) {
            if ($response['email'] == $user && $response['password'] == password_verify($_POST['log_password'], $response['password'])) {
                $_SESSION['status'] = session_id();
                $_SESSION['userId'] = $response['id'];
                $test = true;
            }else{
                if ($response2['username'] == $user && $response2['password'] == password_verify($_POST['log_password'], $response2['password'])) {
                    $_SESSION['status'] = session_id();
                    $_SESSION['userId'] = $response2['id'];
                    $test = true;
                }
            }
        }
        return [$test, $user];
    }
    public static function UserLogout()
    {
        unset($_SESSION['status']);
        unset($_SESSION['userId']);
        return;
    }
}
?>