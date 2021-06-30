<?php
function select_all_bikes(){
    global $db;
    $count = 0;
    $query = "INSERT INTO city (Name,CountryCode,District,Population) VALUES (:newcity, :countrycode, :district, :newpopulation)";
    $statement = $db->prepare($query);
    $statement->bindValue(':newcity', $newcity);
    $statement->bindValue(':countrycode', $countrycode);
    $statement->bindValue(':district', $district);
    $statement->bindValue(':newpopulation', $newpopulation);
    if ($statement->execute()) {
        $count = $statement->rowCount();
    };
    $statement->closeCursor();
    return $count;
}
function select_bike_by_name($city)
{
    global $db;
    $query = 'SELECT * FROM test WHERE name = :city';
    $statement = $db->prepare($query);
    $statement->bindValue(':city', $city);
    $statement->execute();
    $results = $statement->fetchAll();
    $statement->closeCursor();
    return $results;
}