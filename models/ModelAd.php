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
    }
?>