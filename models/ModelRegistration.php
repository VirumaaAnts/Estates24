<?php
class ModelRegistration
{
    public static function register()
    {
        $result = false;
        $message = '';
        if (isset($_POST['send'])) {
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $email = $_POST['email'];
            $username = $_POST['username'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $photo = $_FILES['file']['name'];
            $phone = $_POST['phone'];

            $database = new database();
            $query = "INSERT INTO `user` (`name`, `surname`, `email`, `username`, `password`, `photo`, `phone`, `mackler`)" .
                " VALUES ('$name', '$surname', '$email', '$username', '$password', '$photo', '$phone', 0)";
            $response = $database -> executeRun($query);
            if ($response == true) {
                $result = true;
                if(isset($_FILES['file'])) {
                    $response = $database -> getOne("select id from user where username='".$username."';");
                    if($response == true) {
                        $folder = 'public/uploads/user_'.$response['id'].'/'.$photo;
                        if(!is_dir($folder)) {
                            mkdir("public/uploads/user_".$response['id']);
                        }
                        if(move_uploaded_file($_FILES['file']['tmp_name'], $folder)) {
                        } else {
                            $message = 'Cannot upload an image!';
                        }
                    }
                }
            } else {
                $message = 'ERROR! Cannot create a new user!';;
            }
        }
        $data = array($result, $message);
        return $data;
    }
}
?>