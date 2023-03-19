<?php
    class ModelMacklers
    {
        public static function getMacklers()
        {
            $database = new database();
            $macklers = $database->getAll("SELECT *, COUNT(object.ownerId) as adsCount 
                FROM user INNER JOIN object on object.ownerId = user.id AND user.mackler = 1 GROUP BY object.ownerId ORDER BY object.id ASC");
            return $macklers;
        }
    }
?>