<?php 
class ModelProfile
{
    public static function getProfileInfo() {
        $database = new database();
        $response = $database -> getOne("SELECT * FROM user WHERE id = ".$_SESSION['userId']);
        if($response != null) return $response;
    }
}
?>