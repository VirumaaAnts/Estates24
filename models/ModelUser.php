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
                if (strtolower($response2['username']) == strtolower($user) && $response2['password'] == password_verify($_POST['log_password'], $response2['password'])) {
                    $_SESSION['status'] = session_id();
                    $_SESSION['userId'] = $response2['id'];
                    $test = true;
                }
            }
        }
        return [$test, $user];
    }
    public static function getProfileInfo() 
    {
        $database = new database();
        $response = $database -> getOne("SELECT * FROM user WHERE id = ".$_SESSION['userId']);
        if($response != null) return $response;
    }
    public static function editProfile()
    {
        if(isset($_POST['update'])) {
            $file = 'public/uploads/user_'.$_SESSION['userId'].'/'.$_POST['prev_picture'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

            // If user has cleared at least one important(NOT NULL) field then return
            if(
                trim($_POST['name']) == '' || trim($_POST['surname']) == '' || trim($_POST['username']) == ''
                || trim($_POST['email']) == '' || trim($_POST['password']) == '' || trim($_POST['phone']) == ''
            ) 
            { 
                header('Location: /profile'); 
                return; 
            }

            else {
                $database = new database();
                $query = "UPDATE `user` SET 
                    `name` = '".$_POST['name']."', `surname` = '".$_POST['surname']."', 
                    `username` = '".$_POST['username']."', `email` = '".$_POST['email']."', 
                    `password` = '".$password."', `phone` = '".$_POST['phone']."' 
                    WHERE `user`.`id` = ".$_SESSION['userId']."";
    
                if (($_FILES['picture']['size'] != 0)) {
                    if (file_exists($file)) { 
                        unlink($file);
                    }
                    $folder = 'public/uploads/user_'.$_SESSION['userId'].'/'.$_FILES['picture']['name'];
                    move_uploaded_file($_FILES['picture']['tmp_name'], $folder);
    
                    $query = "UPDATE `user` SET 
                        `name` = '".$_POST['name']."', `surname` = '".$_POST['surname']."', 
                        `username` = '".$_POST['username']."', `email` = '".$_POST['email']."', 
                        `password` = '".$password."', `photo` = '".$_FILES['picture']['name']."', 
                        `phone` = '".$_POST['phone']."' WHERE `user`.`id` = ".$_SESSION['userId']."";
                }
                $database -> executeRun($query);
            }
            header('Location: /profile');
        }
    }
    public static function UserLogout()
    {
        unset($_SESSION['status']);
        unset($_SESSION['userId']);
        return;
    }
}
?>