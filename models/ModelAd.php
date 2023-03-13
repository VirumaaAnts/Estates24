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
        public static function methodName()
        {
            $database = new database();
            $query = null;

            if(isset($_POST['send'])) {
                $type = $_POST['type'];
                $address = $_POST['address'];
                $city = $_POST['city'];
                $towns = $_POST['towns'];
    
                $roomCount = $_POST['roomCount'];
                $floorCount = $_POST['floorCount'];
                $floor = $_POST['floor'];
                $area = $_POST['area'];
                $territory = $_POST['territory'];
                $basement = $_POST['basement'];
                $year = $_POST['year'];
                $price = $_POST['price'];
                $conditions = $_POST['conditions'];
                $heat = $_POST['heat'];
                $description = $_POST['description'];
                // $pictures = $_POST['files'];
    
    
                if($type = 'House') {
                    $query = "INSERT INTO `object` (
                        address, cityId, roomCount, floorCount, area, territory, 
                        basement, year, price, conditions, heat, description)
                        VALUES ($address, $city, $roomCount, $floorCount, $floor, $area, 
                        $territory, $basement,$year, $price, $conditions, $heat, $description)";
                }
                // if($type = 'House') {
                //     $query = "INSERT INTO `object` (
                //         address, cityId, roomCount, floorCount, area, territory, 
                //         basement, year, price, conditions, heat, description)
                //         VALUES ()";
                // }
            }
        }
    }
?>