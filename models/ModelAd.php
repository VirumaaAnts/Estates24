<?php
class ModelAd
{
    public static function getObjectData($objectId, $ownerId)
    {
        $database = new database();
        $object = $database->getOne(
            "SELECT * FROM object WHERE object.id = $objectId"
        );
        $city = $database->getOne(
            "SELECT name, countyId FROM city WHERE id = $object[cityId]"
        );
        $county = $database->getOne(
            "SELECT name FROM county WHERE id = $city[countyId]"
        );
        $object["city"] = $city["name"];
        $object["county"] = $county["name"];
        if ($object == null) return;
        $owner = $database->getOne(
            "SELECT * FROM user WHERE id = " . $ownerId
        );
        if ($owner == null) return;
        $adPhotos = $database->getAll(
            "SELECT * FROM photo WHERE houseId = $objectId ORDER BY id ASC"
        );
        if ($adPhotos == null) return;

        if(isset($_SESSION['userId'])) {
            $fav = $database->getOne(
                "SELECT * FROM fav WHERE objectId = $object[id] AND userId = $_SESSION[userId]"
            );
        } else {
            $fav = null;
        }
        return array($object, $owner, $adPhotos, $fav);
        
    }
    public static function createAdv()
    {
        $database = new database();
        $obj = array_filter($_POST, 'strlen');
        $fields = "";
        $values = "";
        foreach ($obj as $field => $value) {
            if ($field != "city") {
                $fields .= $field;
                if (is_numeric($value)) {
                    $values .= $value;
                } else {
                    $values .= "'" . str_replace("'", '"', $value) . "'";
                }
            } else {
                $cityId = $database->getOne("SELECT `id` FROM `city` WHERE `name` LIKE '$value'");
                if (is_bool($cityId)) {
                    return array(false);
                } else {
                    $fields .= "cityId";
                    $values .= $cityId["id"];
                }
            }
            $fields .= ",";
            $values .= ",";
        }
        $fields .= "ownerId";
        $values .= $_SESSION["userId"];
        $query = "INSERT INTO `object` ($fields) VALUES ($values)";
        $created_obj = $database->createAdv($query);
        $dir = "public/uploads/user_$_SESSION[userId]/ad_$created_obj";
        mkdir($dir);
        foreach ($_FILES as $file) {
            $count = 0;
            foreach ($file["name"] as $name) {
                $filename = basename($name);
                $uploadfile = $dir . "/" . $filename;
                move_uploaded_file($file['tmp_name'][$count], $uploadfile);
                $count++;
                $database->executeRun("INSERT INTO `photo`(`photo`,`houseId`) VALUES ('$filename', $created_obj)");
            }
        }
    }
    public static function GetCities()
    {
        $database = new database();
        return $database->getAll("SELECT * FROM city");
    }
    public static function CreateFav($objectId)
    {
        $database = new database();
        if(isset($_SESSION['userId'])) {
            $userId = $_SESSION['userId'];
            $checkExisting = $database->getOne("SELECT * FROM `fav` WHERE objectId = $objectId AND userId = $userId");
            if($checkExisting == null) {
                $database->executeRun("INSERT INTO `fav` (userId, objectId) VALUES ($userId, $objectId)");
            }
        }
    }
    public static function RemoveFavIfExists($objectId)
    {
        $database = new database();
        if(isset($_SESSION['userId'])) {
            $userId = $_SESSION['userId'];
            $checkExisting = $database->getOne("SELECT * FROM `fav` WHERE `objectId` = $objectId AND `userId` = $userId");
            if($checkExisting != null) {
                $database->executeRun("DELETE FROM `fav` WHERE `userId` = $userId AND `objectId` = $objectId");
            }
        }
    }
}
?>