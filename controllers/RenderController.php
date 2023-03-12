<?php
class RenderController
{
    public static function start() {
        $database = new database();
        $result = $database -> getAll("SELECT * FROM city ORDER BY id ASC");
        if($result == null) return;
        json_encode($result);
        $myfile = fopen("public/data/cities.json", "w") or die("Unable to open file!");
        $txt = json_encode($result);
        fwrite($myfile, $txt);
        fclose($myfile);
        $data = ModelEstates::getThreeEstates();
        $countiesCities = ModelCountiesCities::getCountiesCities();
        include_once 'view/main.php';
    }
    public static function macklers() {
        include_once 'view/macklers.php';
    }
    public static function AllEstates() {
        $data = ModelEstates::getEstates();
        $countiesCities = ModelCountiesCities::getCountiesCities();
        include_once 'view/estates.php';
    }
    public static function AllOffers() {
        $data = ModelEstates::getEstates();
        $countiesCities = ModelCountiesCities::getCountiesCities();
        include_once 'view/offers.php';
    }
    public static function registrationForm() {
        include_once 'view/registration.php';
    }
    public static function Ad($object, $owner) {
        $data = ModelAd::getObjectData($object, $owner);
        include_once 'view/ad.php';
    }
    public static function adForm() {
        include_once 'view/adForm.php';    
    }
    public static function Maklers() {
        include_once 'view/maklers.php';    
    }
    public static function Profile(){
        include_once 'view/profile.php';    
    }
}
?>