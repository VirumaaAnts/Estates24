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
        $offers = ModelEstates::getThreeOffers();
        $countiesCities = ModelCountiesCities::getCountiesCities();
        include_once 'view/main.php';
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
    public static function Ad() {
        $data = ModelAd::getObjectData($_GET['ad'], $_GET['user']);
        $fav_status = null;
        if(isset($_GET['fav_status'])) {
            $fav_status = $_GET['fav_status'];
        }
        if($fav_status != null) {
            ModelAd::CreateFav($_GET['ad']);
        }
        if($_GET['fav'] == 'no') {
            ModelAd::RemoveFavIfExists($_GET['ad']);
        }
        include_once 'view/ad.php';
    }
    public static function adForm() {
        $countiesCities = ModelCountiesCities::getCountiesCities();
        include_once 'view/adForm.php';    
    }
    public static function Maklers() {
        include_once 'view/macklers.php';    
    }
    public static function Profile() {
        $userInfo = ModelUser::getProfileInfo();
        include_once 'view/profile.php';    
    }
    public static function FilterPage(){
        $dataS = ModelFilters::getFilterObjects();
        $countiesCities = ModelCountiesCities::getCountiesCities();
        include_once 'view/estatesByFilter.php';
    }
    public static function Favourites(){
        include_once 'view/favourites.php';
    }
    public static function ErrorPage(){
        include_once 'view/error.php';
    }
}
?>