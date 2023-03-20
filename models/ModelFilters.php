<?php
class ModelFilters
{
    public static function getFilterObjects()
    {
        if (isset($_POST['towns'])) {
            $city = $_POST['towns'];
        } else {
            $city = 0;
        }
        if (isset($_POST['county'])) {
            $county = $_POST['county'];
        } else {
            $county = 0;
        }
        if (!empty($_POST['min_rooms'])) {
            $min_rooms = $_POST['min_rooms'];
        } else {
            $min_rooms = 0;
        }
        if (!empty($_POST['max_rooms'])) {
            $max_rooms = $_POST['max_rooms'];
        } else {
            $max_rooms = 100000;
        }
        if (!empty($_POST['min_area'])) {
            $min_area = $_POST['min_area'];
        } else {
            $min_area = 0;
        }
        if (!empty($_POST['max_area'])) {
            $max_area = $_POST['max_area'];
        } else {
            $max_area = 100000;
        }
        if (!empty($_POST['min_price'])) {
            $min_price = $_POST['min_price'];
        } else {
            $min_price = 0;
        }
        if (!empty($_POST['max_price'])) {
            $max_price = $_POST['max_price'];
        } else {
            $max_price = 10000000000;
        }

        $database = new database();
        $photo = $database->getAll("SELECT * FROM photo ORDER BY id ASC");
        if ($photo == null)
            return;

        if ($city != 0 && $city != 'none') {
            $query = "SELECT * FROM object
                WHERE cityId = $city
                AND IFNULL(area, 0) BETWEEN $min_area AND $max_area
                AND price BETWEEN $min_price AND $max_price
                AND IFNULL(roomCount, 0) BETWEEN $min_rooms AND $max_rooms
                ORDER BY id ASC";
            if (isset($_GET['offers'])) {
                $query = str_replace(' ORDER BY id ASC', ' AND offer = 1 ORDER BY id ASC', $query);
            }
            if (isset($_POST['type'])) {
                $query = str_replace(" AND price", "AND type = '" . ucfirst($_POST['type']) . "' AND price", $query);
            }
        } elseif ($county != 0 && $county != 'none') {
            $query = "SELECT * FROM object
                WHERE cityId IN (SELECT id FROM city WHERE countyId = $county)
                AND IFNULL(area, 0) BETWEEN $min_area AND $max_area
                AND price BETWEEN $min_price AND $max_price
                AND IFNULL(roomCount, 0) BETWEEN $min_rooms AND $max_rooms
                ORDER BY id ASC";
            if (isset($_GET['offers'])) {
                $query = str_replace(' ORDER BY id ASC', ' AND offer = 1 ORDER BY id ASC', $query);
            }
            if (isset($_POST['type'])) {
                $query = str_replace(" AND price", "AND type = '" . ucfirst($_POST['type']) . "' AND price", $query);
            }
        } else {
            $query = "SELECT * FROM object WHERE 
                IFNULL(area, 0) BETWEEN $min_area AND $max_area
                AND price BETWEEN $min_price AND $max_price
                AND IFNULL(roomCount, 0) BETWEEN $min_rooms AND $max_rooms
                ORDER BY id ASC";
            if (isset($_GET['offers'])) {
                $query = str_replace(' ORDER BY id ASC', ' AND offer = 1 ORDER BY id ASC', $query);
            }
            if (isset($_POST['type'])) {
                $query = str_replace(" AND price", "AND type = '" . ucfirst($_POST['type']) . "' AND price", $query);
            }
        }
        $estates = $database->getAll($query);
        if ($estates == null)
            return;
        for ($i = 0; $i < count($estates); $i++) {
            $cityId = $database->getOne("SELECT *, city.name as city FROM object
                INNER JOIN city on object.cityId = city.id AND object.id = " . $estates[$i]['id']);
            $estates[$i]['city'] = $cityId['name'];

            if (isset($_SESSION['userId'])) {
                $fav = $database->getOne("SELECT * FROM fav 
                    WHERE userId = " . $_SESSION['userId'] . " AND objectId = " . $estates[$i]['id']);
                if ($fav == null) {
                    $estates[$i]['fav'] = 'no';
                } else {
                    $estates[$i]['fav'] = 'yes';
                }
            } else {
                $estates[$i]['fav'] = 'none';
            }
        }
        return [$estates, $photo];
    }
}
?>