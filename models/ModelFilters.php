<?php
    class ModelFilters {
       public static function getFilterObjects() {
            if(isset($_POST['towns'])){
                $city = $_POST['towns'];
            }else{
                $city = 0;
            }
            if(isset($_POST['county'])){
                $county = $_POST['county'];
            }else{
                $county = 0;
            }
            if(!empty($_POST['min_rooms'])){
                $min_rooms = $_POST['min_rooms'];
            }else{
                $min_rooms = 0;
            }
            if(!empty($_POST['max_rooms'])){
                $max_rooms = $_POST['max_rooms'];
            }else{
                $max_rooms = 100000;
            }
            if(!empty($_POST['min_area'])){
                $min_area = $_POST['min_area'];
            }else{
                $min_area = 0;
            }
            if(!empty($_POST['max_area'])){
                $max_area = $_POST['max_area'];
            }else{
                $max_area = 100000;
            }
            if(!empty($_POST['min_price'])){
                $min_price = $_POST['min_price'];
            }else{
                $min_price = 0;
            }
            if(!empty($_POST['max_price'])){
                $max_price = $_POST['max_price'];
            }else{
                $max_price = 10000000;
            }

            $database = new database();
            $photo = $database -> getAll("SELECT * FROM photo ORDER BY id ASC");
            if($photo == null) return;

            if($city != 0 && $city != 'none'){
                $estates = $database -> getAll("SELECT * FROM object
                WHERE cityId=".$city."
                AND roomCount > ".$min_rooms."
                AND roomCount < ".$max_rooms."
                AND area > ".$min_area."
                AND area < ".$max_area."
                AND price > ".$min_price."
                AND price < ".$max_price."
                ORDER BY id ASC");
            }elseif($county != 0 && $county != 'none') {
                $estates = $database -> getAll("SELECT * FROM object
                WHERE cityId IN (SELECT id FROM city WHERE countyId = ".$county.")
                AND roomCount > ".$min_rooms."
                AND roomCount < ".$max_rooms."
                AND area > ".$min_area."
                AND area < ".$max_area."
                AND price > ".$min_price."
                AND price < ".$max_price."
                ORDER BY id ASC");
            }
            else{
                $estates = $database -> getAll("SELECT * FROM object
                WHERE roomCount > ".$min_rooms."
                AND roomCount < ".$max_rooms."
                AND area > ".$min_area."
                AND area < ".$max_area."
                AND price > ".$min_price."
                AND price < ".$max_price."
                ORDER BY id ASC");
            }
            if($estates == null) return;
            for ($i = 0; $i < count($estates); $i++) { 
                $cityId = $database -> getOne("SELECT *, city.name as city FROM object
                INNER JOIN city on object.cityId = city.id AND object.id = ".$estates[$i]['id']);
                $estates[$i]['city'] = $cityId['name'];
            };
            return [$estates, $photo];
       }
    }
?>