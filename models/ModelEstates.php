<?php
    class ModelEstates {
       public static function getEstates() {
            $database = new database();
            $photo = $database->getAll("SELECT * FROM photo ORDER BY id ASC");
            $response = $database->getAll("SELECT * FROM Estates ORDER BY id ASC");
            return [$response, $photo];
       }
    }
?>