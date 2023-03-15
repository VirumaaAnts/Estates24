<?php 
    class ModelAd
    {
        public static function getObjectData($objectId, $ownerId){
            $database = new database();
            $object = $database -> getOne(
                "SELECT *, city.name as city FROM object 
                INNER JOIN city on object.cityId = city.id AND object.id = $objectId"
            );
            // echo $objectId;
            // echo $object['id'];
            if($object == null) return;
            $owner = $database -> getOne(
                "SELECT * FROM user WHERE id = ".$ownerId
            );
            if($owner == null) return;
            $adPhotos = $database -> getAll(
                "SELECT * FROM photo WHERE houseId = ".$object['id']." ORDER BY id ASC"
            );
            // echo $object['id'];
            // echo $objectId;
            if($adPhotos != null) return array($object, $owner, $adPhotos);
        }
        public static function createAdv(){
            $database = new database();
            $obj = array_filter( $_POST, 'strlen' );
            $fields = "";
            $values = "";
            foreach ($obj as $field => $value) {
                if($field != "city"){
                    $fields .= $field;
                    if(is_numeric($value)){
                        $values .= $value;
                    }else{
                        $values .= "'".str_replace("'",'"', $value)."'";
                    }
                }else{
                    $cityId = $database->getOne("SELECT `id` FROM `city` WHERE `name` LIKE '$value'");
                    if(is_bool($cityId)){
                        return array(false);
                    }else{
                        $fields .= "cityId";
                        $values .= $cityId["id"];
                    }
                }
                $fields .= ",";
                $values .= ",";
                // if(next($obj)==true){
                //     $fields .= ",";
                //     $values .= ",";
                // }
            }
            $fields .= "ownerId";
            $values .= $_SESSION["userId"];
            $query = "INSERT INTO `object` ($fields) VALUES ($values)";
            $created_obj = $database ->createAdv($query);
            $dir = "public/uploads/user_$_SESSION[userId]/ad_$created_obj";
            mkdir($dir);
            foreach ($_FILES as $file) {
                $count = 0;
                foreach ($file["name"] as $name) {
                    $filename = basename($name);
                    $uploadfile = $dir."/" . $filename;
                    move_uploaded_file($file['tmp_name'][$count], $uploadfile);
                    $count++;
                    $database->executeRun("INSERT INTO `photo`(`photo`,`houseId`) VALUES ('$filename', $created_obj)");
                }
            }
        }
        public static function GetCities(){
            $database = new database();
            return $database->getAll("SELECT * FROM city");
        }
    }
?>