<?php
class ModelRegistration
{
    public static function register()
    {
        $result = false;
        $message = '<p style="color:green;font-weight:900;margin-left:20px">Успех!</p>';
        if (isset($_POST['send'])) {
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $email = $_POST['email'];
            $username = $_POST['username'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $photo = $_FILES['file']['name'];
            $phone = "+372".$_POST['phone'];

            $database = new database();
            $response = $database -> getOne("select id from user where `email` = '".$email."';");
            if($response != null){
                $message = '<p style="color:red;font-weight:900;margin-left:20px">Email exists!</p>';
                $data = array($result, $message, [$name,$surname,$email,$username,$password,$_FILES['file']['tmp_name'],$phone]);
                return $data;
            }
            else {
                $query = "INSERT INTO `user` (`name`, `surname`, `email`, `username`, `password`, `photo`, `phone`, `mackler`)" .
                    " VALUES ('$name', '$surname', '$email', '$username', '$password', '$photo', '$phone', 0)";
                $response = $database -> executeRun($query);
                if ($response != null) {
                    if(isset($_FILES['file'])) {
                        $response = $database -> getOne("select id from user where `email` = '".$email."';");
                        if($response != null) {
                            $folder = 'public/uploads/user_'.$response['id'].'/'.$photo;
                            $folderCheck = 'public/uploads/user_'.$response['id'];
                            if(!is_dir($folderCheck)) {
                                mkdir($folderCheck);
                            }
                            if(move_uploaded_file($_FILES['file']['tmp_name'], $folder)) {
                                $result = true;
                            } else {
                                $message = '<p style="color:red;font-weight:900;margin-left:20px">Cannot upload an image!</p>';
                            }
                        }
                    }
                } else {
                    $message = '<p style="color:red;font-weight:900;margin-left:20px">ERROR! Cannot create a new user!</p>';
                }
            }
            $data = array($result, $message);
            return $data;
            }
    }
}
?>