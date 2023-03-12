<?php
    class ModelCountiesCities {
       public static function getCountiesCities() {
            $database = new database();
            $county = $database -> getAll("SELECT * FROM county ORDER BY id ASC");
            if($county == null) return;
            $city = $database -> getAll("SELECT * FROM city ORDER BY id ASC");
            if($city == null) return;
            return [$county, $city];
       }
    }
?>