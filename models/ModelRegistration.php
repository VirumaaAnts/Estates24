<?php
class ModelRegistration
{
    public static function register()
    {
        $result = false;
        if (isset($_POST['send'])) {
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $email = $_POST['email'];
            $login = $_POST['login'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $photo = $_FILES['file']['name'];

            if ($photo != '') {
                $uploadFIle = '../public/uploads/' . basename($_FILES['file']['name']);
                move_uploaded_file($_FILES['file']['name'], $uploadFIle);
            }

            $database = new database();
            $query = "INSERT INTO `users` (`name`, `surname`, `email`, `login`, `password`, `photo`)" .
                " VALUES ('$name', '$surname', '$email', '$login', '$password', '$photo')";
            $response = $database -> executeRun($query);
            if ($response == true) {
                $result = true;
            }
        } else {
            echo 'ERROR! Cannot create a new user!';
        }
        return $result;
    }
}
?>