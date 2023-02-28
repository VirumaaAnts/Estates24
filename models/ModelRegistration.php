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
            $login = $_POST['login'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $photo = $_FILES['file']['name'];

            if(isset($_FILES['file'])) {
                $folder = 'public/uploads/' . $photo;
                if(move_uploaded_file($_FILES['file']['tmp_name'], $folder)) {
                } else {
                    $message = 'Cannot upload an image!';
                }
            }

            $database = new database();
            $query = "INSERT INTO `users` (`name`, `surname`, `email`, `login`, `password`, `photo`)" .
                " VALUES ('$name', '$surname', '$email', '$login', '$password', '$photo')";
            $response = $database -> executeRun($query);
            if ($response == true) {
                $result = true;
                $message = 'ALL GOODNESS';
            } else {
                $message = 'ERROR! Cannot create a new user!';;
            }
        }
        $data = array($result, $message);
        return $data;
    }
}
?>