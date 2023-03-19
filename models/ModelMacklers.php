<?php
    class ModelMacklers
    {
        public static function getMacklers()
        {
            $database = new database();
            $macklers = $database->getAll("SELECT *, 0 AS adsCount FROM user WHERE mackler = 1 ORDER BY id DESC");
            $macklersCount = $database->getAll(
                "SELECT user.*, COUNT(object.ownerId) as adsCount FROM user as `user`, object as `object` 
                WHERE user.mackler = 1 AND user.id = object.ownerId GROUP BY user.id;"
            );
            $macklersList = array();
            foreach ($macklers as $mackler) {
                for ($i = 0; $i < count($macklersCount); $i++) {
                    if($mackler['id'] == $macklersCount[$i]['id']) {
                        $mackler['adsCount'] = $macklersCount[$i]['adsCount'];
                    }
                }
                array_push($macklersList, $mackler);
            }
            return $macklersList;
        }
    }
?>