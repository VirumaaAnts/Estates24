<?php
    class ModelEstates {
       public static function getEstates() {
            $database = new database();
            $response = $database->getAll("SELECT * FROM Estates ORDER BY id ASC");
            return $response;
       }
    }
?>