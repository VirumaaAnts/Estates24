<?php
    class ModelEstates {
        public static function getThreeEstates() {
            $database = new database();
            $photo = $database -> getAll("SELECT * FROM photo ORDER BY id ASC");
            if($photo == null) return;
            $estates = $database -> getAll("SELECT * FROM object ORDER BY id DESC LIMIT 3");
            if($estates == null) return;
            for ($i = 0; $i < count($estates); $i++) { 
                $cityId = $database -> getOne("SELECT *, city.name as city FROM object 
                INNER JOIN city on object.cityId = city.id AND object.id = ".$estates[$i]['id']);
                $estates[$i]['city'] = $cityId['name'];
                $fav = $database->getOne("SELECT * FROM fav 
                WHERE userId = ".$estates[$i]['id']." AND objectId = ".$estates[$i]['ownerId']);
                if($fav == null) { 
                    $fav = 'none'; 
                } else { $fav = $fav['userId']; }
                $estates[$i]['fav'] = $fav;
            };
            return [$estates, $photo];
       }
       public static function getEstates() {
            $database = new database();
            $photo = $database -> getAll("SELECT * FROM photo ORDER BY id ASC");
            if($photo == null) return;
            $estates = $database -> getAll("SELECT * FROM object ORDER BY id ASC");
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