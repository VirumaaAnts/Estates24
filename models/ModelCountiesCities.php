<?php
class ModelCountiesCities
{
    public static function getCountiesCities()
    {
        $database = new database();
        $county = $database->getAll("SELECT * FROM county ORDER BY id ASC");
        if ($county == null)
            return;
        $city = $database->getAll("SELECT * FROM city ORDER BY id ASC");
        if ($city == null)
            return;

        $typesCount = $database->getAll("SELECT type, offer, COUNT(type) as typeCount FROM object GROUP BY type ORDER BY id ASC");
        if ($typesCount == null)
            return;

        $types = array('Apartment', 'House', 'Summer house', 'Garage', 'Land', 'Part');
        return [$county, $city, $typesCount, $types];
    }
}
?>