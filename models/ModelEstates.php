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
                if($estates[$i]['roomCount'] == '') {
                    $estates[$i]['roomCount'] = 1;
                }

                if(isset($_SESSION['userId'])) {
                    $fav = $database->getOne("SELECT * FROM fav 
                        WHERE userId = ".$_SESSION['userId']." AND objectId = ".$estates[$i]['id']);
                    if($fav == null) { 
                        $estates[$i]['fav'] = 'no'; 
                    } else { 
                        $estates[$i]['fav'] = 'yes';
                    }
                } else {
                    $estates[$i]['fav'] = 'none'; 
                }
            };
            return [$estates, $photo];
       }
        public static function getThreeOffers() {
            $database = new database();
            $photo = $database -> getAll("SELECT * FROM photo ORDER BY id ASC");
            if($photo == null) return;
            $estates = $database -> getAll("SELECT * FROM object WHERE offer = 1 ORDER BY id DESC LIMIT 3");
            if($estates == null) return;
            for ($i = 0; $i < count($estates); $i++) { 
                $cityId = $database -> getOne("SELECT *, city.name as city FROM object 
                    INNER JOIN city on object.cityId = city.id AND object.id = ".$estates[$i]['id']);
                $estates[$i]['city'] = $cityId['name'];
                if($estates[$i]['roomCount'] == '') {
                    $estates[$i]['roomCount'] = 1;
                }

                if(isset($_SESSION['userId'])) {
                    $fav = $database->getOne("SELECT * FROM fav 
                        WHERE userId = ".$_SESSION['userId']." AND objectId = ".$estates[$i]['id']);
                    if($fav == null) { 
                        $estates[$i]['fav'] = 'no'; 
                    } else { 
                        $estates[$i]['fav'] = 'yes';
                    }
                } else {
                    $estates[$i]['fav'] = 'none';
                }
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
                if($estates[$i]['roomCount'] == '') {
                    $estates[$i]['roomCount'] = 1;
                }

                if(isset($_SESSION['userId'])) {
                    $fav = $database->getOne("SELECT * FROM fav 
                        WHERE userId = ".$_SESSION['userId']." AND objectId = ".$estates[$i]['id']);
                    if($fav == null) { 
                        $estates[$i]['fav'] = 'no'; 
                    } else { 
                        $estates[$i]['fav'] = 'yes';
                    }
                } else {
                    $estates[$i]['fav'] = 'none';
                }
            };
            return [$estates, $photo];
       }
       public static function getfavorites() {
            $database = new database();
            $photo = $database -> getAll("SELECT * FROM photo ORDER BY id ASC");
            if($photo == null) return;
            $favorites = $database -> getAll("SELECT * FROM fav WHERE userId = ".$_SESSION['userId']." ORDER BY id ASC");
            if($favorites == null) return;
            $estates = array();
            for ($i = 0; $i < count($favorites); $i++) {
                $estate = $database -> getOne("SELECT * FROM object WHERE id = ".$favorites[$i]['objectId']);
                $city = $database -> getOne("SELECT city.name as city FROM object 
                    INNER JOIN city on object.cityId = city.id AND object.id = ".$estate['id']);
                $estate['city'] = $city['city'];
                array_push($estates, $estate);
            };
            return [$estates, $photo];
        }
    }
?>