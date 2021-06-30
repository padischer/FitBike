<?php

function select_all_bikes(){
    global $db;
    $query = "SELECT * FROM bikes";
    $statement = $db->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();
    return $result;
}
function select_bikes_by_name($bike)
{
    global $db;
    $query = 'SELECT * FROM bikes WHERE name = :bike';
    $statement = $db->prepare($query);
    $statement->bindValue(':bike', $bike);
    $statement->execute();
    $results = $statement->fetchAll();
    return $results;
}