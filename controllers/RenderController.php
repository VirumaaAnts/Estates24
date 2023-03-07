<?php
class RenderController
{
    public static function start(){
        include_once 'view/main.php';
    }
    public static function macklers() {
        include_once 'view/macklers.php';
    }
    public static function AllEstates() {
        $data = ModelEstates::getEstates();
        include_once 'view/estates.php';
    }
    public static function registration($msg){
        $message = $msg;
        include_once 'view/registration.php';
    }
    public static function adForm(){
        include_once 'view/adForm.php';    
    }
}
?>