<?php
class ModelUser
{
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
            } else {
                if ($response2['username'] == $user && $response2['password'] == password_verify($_POST['log_password'], $response2['password'])) {
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
        $response = $database->getOne("SELECT * FROM user WHERE id = " . $_SESSION['userId']);
        if ($response != null)
            return $response;
    }
    public static function editProfile()
    {
        $response = false;
        $database = new database();
        if (isset($_POST['update'])) {
            if(isset($_POST['password'])){
            } else {
                $_POST['password'] = '';
            }
            // If user has cleared at least one important(NOT NULL) field then return
            if (
                trim($_POST['name']) == '' || trim($_POST['surname']) == '' || trim($_POST['username']) == ''
                || trim($_POST['email']) == '' || trim($_POST['phone']) == ''
            ) {
                header('Location: ./profile');
                return;
            } else {
                function photoCheck($query) {
                    $currentPicture = $_POST['prev_picture'];
                    $file = 'public/uploads/user_' . $_SESSION['userId'] . '/' . $currentPicture;
                    if (($_FILES['picture']['size'] != 0)) {
                        if (file_exists($file)) {
                            unlink($file);
                        }
                        $folder = 'public/uploads/user_' . $_SESSION['userId'] . '/' . $_FILES['picture']['name'];
                        move_uploaded_file($_FILES['picture']['tmp_name'], $folder);
                    } else {
                        $query = str_replace("`photo` = '".$_POST['picture']['name']. "'", "`photo` = '".$currentPicture."'", $query);
                    }
                    return $query;
                }
                $res = $database -> getAll("SELECT * FROM user;");
                $checkUser = 0;
                if($res) {
                    foreach($res as $elem) {
                        if($elem['username'] === $_POST['username'] && $elem['email'] === strtolower($_POST['email'])){
                            $checkUser = 1;
                            break;
                        } else {
                            $checkUser = 0;
                        }
                    }
                }
                if($checkUser != 0) {
                    header('Location: ./profile');
                    return $response;
                }
                if(trim($_POST['password']) == '') { 
                    $query = "UPDATE `user` SET 
                        `name` = '" . $_POST['name'] . "', `surname` = '" . $_POST['surname'] . "', 
                        `username` = '" . $_POST['username'] . "', `email` = '" . strtolower($_POST['email']) . "', 
                        `photo` = '" . $_FILES['picture']['name'] . "', `phone` = '" . $_POST['phone'] . "' 
                        WHERE `user`.`id` = " . $_SESSION['userId'] . "";
                        $query = photoCheck($query);
                } else {
                    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                    $query = "UPDATE `user` SET 
                        `name` = '" . $_POST['name'] . "', `surname` = '" . $_POST['surname'] . "', 
                        `username` = '" . $_POST['username'] . "', `email` = '" . strtolower($_POST['email']) . "', 
                        `password` = '" . $password . "', `photo` = '" . $_FILES['picture']['name'] . "', 
                        `phone` = '" . $_POST['phone'] . "' WHERE `user`.`id` = " . $_SESSION['userId'] . "";
                        $query = photoCheck($query);
                }
            }
        }
        $runnedQuery = $database->executeRun($query);
        if($runnedQuery == true) {
            $response = true;
        }
        header('Location: ./profile');
        return $response;
    }
    public static function deleteProfile() {
        $database = new database();
        if(isset($_POST['delete'])) {

            $query0 = "DELETE FROM `fav`
            WHERE `userId` = ".$_SESSION['userId'].";";

            $runned0Query = $database->executeRun($query0);

            $query1 = "DELETE FROM photo WHERE houseId
            IN (SELECT id FROM object WHERE ownerId = ".$_SESSION['userId'].");";

            $runned1Query = $database->executeRun($query1);

            $query2 = "DELETE FROM object WHERE `ownerId` = ".$_SESSION['userId'];

            $runned2Query = $database->executeRun($query2);

            $query = "DELETE FROM `user` WHERE `id` = ".$_SESSION['userId'];

            $runnedQuery = $database->executeRun($query);
            if($runnedQuery) {
                $response = true;
                $folder = 'public/uploads/user_' . $_SESSION['userId'];
                //Get a list of all of the file names and folders in the folder.
                foreach(glob($folder . '/*') as $file) {
                    if(is_dir($file)){
                        foreach(glob($file . '/*') as $fileIn) {
                            unlink($fileIn);
                        }
                        rmdir($file);
                    }
                    else{
                        unlink($file);
                    }
                    rmdir($folder);
                }
                unset($_SESSION['status']);
                unset($_SESSION['userId']);
            }
        }
        $runnedQuery = $database->executeRun($query);
        if($runnedQuery == true) {
            $response = true;
        }
        header('Location: ./profile');
        return $response;
    }
    public static function getUser()
    {
        $database = new database();
        $user = $database->getOne("SELECT * FROM user WHERE id = $_GET[id]");
        if($user == null) return;
        return $user;
    }
    public static function getUserAds()
    {
        $database = new database();
        $userAds = $database->getAll(
            "SELECT object.* FROM user as `user`, object as `object` 
                WHERE user.id = object.ownerId AND object.ownerId = $_SESSION[userId] GROUP BY object.id ORDER BY object.id ASC"
        );
        if($userAds == null) return;

        foreach ($userAds as $object) {
            $city = $database->getOne(
                "SELECT name, countyId FROM city WHERE id = $object[cityId]"
            );
            $county = $database->getOne(
                "SELECT name FROM county WHERE id = $city[countyId]"
            );
            $object["city"] = $city["name"];
            $object["county"] = $county["name"];
        }

        $pictures = $database->getAll("SELECT * FROM `photo` ORDER BY id ASC");
        return [$userAds, $pictures];
    }
    public static function UserLogout()
    {
        unset($_SESSION['status']);
        unset($_SESSION['userId']);
        return;
    }
    }
?>