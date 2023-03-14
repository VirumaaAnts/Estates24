<?php 
    class ModelAd
    {
        public static function getObjectData($objectId, $ownerId)
        {
            $database = new database();
            $object = $database -> getOne(
                "SELECT *, city.name as city FROM object 
                INNER JOIN city on object.cityId = city.id AND object.id = ".$objectId
            );
            if($object == null) return;
            $owner = $database -> getOne(
                "SELECT * FROM user WHERE id = ".$ownerId
            );
            if($owner == null) return;
            $adPhotos = $database -> getAll(
                "SELECT * FROM photo WHERE houseId = ".$object['id']
            );
            if($adPhotos != null) return array($object, $owner, $adPhotos);
        }
        public static function createObject()
        {
            if(isset($_POST['send'])) {
                $database = new database();
                $query = null;

                $type = $_POST['type'];
                $address = $_POST['address'];
                $town = $_POST['towns'];
                $ownerId = $_SESSION['userId'];

                $description = '';
                if(isset($_POST['description'])) {
                    $description = $_POST['description'];
                }
    
                if($type == 'House') {
                    $query = "INSERT INTO `object` (
                        type, address, ownerId, cityId, roomCount, floorCount, area, territory, 
                        basement, year, price, conditions, heat, description) 
                        VALUES ('$type', '$address', $ownerId, $town, ".$_POST['roomCount'].", ".$_POST['floorCount'].", ".$_POST['area'].", 
                        ".$_POST['territory'].", ".$_POST['basement'].", ".$_POST['year'].", ".$_POST['price'].", ".$_POST['conditions'].", ".$_POST['heat'].", '$description') 
                    ";
                }
                else if($type == 'Apartment') {
                    $query = "INSERT INTO `object` (exe
                        type, address, ownerId, cityId, floorCount, area, year, price, conditions, heat, description) 
                        VALUES ('$type', '$address', $ownerId, $town, ".$_POST['floorCount'].", ".$_POST['area'].", ".$_POST['year'].", 
                        ".$_POST['price'].", ".$_POST['conditions'].", ".$_POST['heat'].", '$description')
                    ";
                }
                else if($type == 'Garage') {
                    $query = "INSERT INTO `object` (
                        type, address, ownerId, cityId, area, basement, year, price, conditions, heat, description) 
                        VALUES ('$type', '$address', $ownerId, $town, ".$_POST['area'].", ".$_POST['basement'].", ".$_POST['year'].", 
                        ".$_POST['price'].", ".$_POST['conditions'].", ".$_POST['heat'].", '$description')
                    ";
                }
                else if($type == 'Land') {
                    $query = "INSERT INTO `object` (
                        type, address, ownerId, cityId, area, territory, price, description)
                        VALUES ('$type', '$address', $ownerId, $town, ".$_POST['area'].", ".$_POST['territory'].", ".$_POST['price'].", '$description')
                    ";
                }
                else if($type == 'Part' || $type == 'Summer house') {
                    $query = "INSERT INTO `object` (
                        type, address, ownerId, cityId, roomCount, floor, area, territory,
                        basement, year, price, conditions, heat) 
                        VALUES ('$type', '$address', $ownerId, $town, ".$_POST['roomCount'].", ".$_POST['floor'].", ".$_POST['area'].", ".$_POST['territory'].", 
                        ".$_POST['basement'].", ".$_POST['year'].", ".$_POST['price'].", ".$_POST['conditions'].", ".$_POST['heat'].", '$description')
                    ";
                }

                $response = $database -> executeRun($query);

                // Getting this object for object-photo relations
                if($response == true) {
                    $price = $_POST['price'];
                    $obj = $database -> getOne("SELECT id FROM `object` 
                    WHERE `type` = '$type' AND `address` = '$address' 
                    AND `ownerId` = $ownerId AND `cityId` = $town AND `price` = $price");
                    $adId = $obj['id'];
                    
                    $folder = "public/uploads/user_$ownerId/ad_$adId";
                    if(!is_dir($folder)) {
                        mkdir($folder);
                    } else {
                        rmdir($folder);
                        mkdir($folder);
                    }

                    foreach($_FILES['files']['tmp_name'] as $name => $value) {
                        $file_name = $_FILES['files']['name'][$name];
                        $fileFolder = "public/uploads/user_$ownerId/ad_$adId/$file_name";
                        move_uploaded_file($value, $fileFolder);

                        $database -> executeRun("INSERT INTO `photo` (photo, houseId) VALUES ('$file_name', $adId)");
                    }

                }
            }
        }
    }
?>