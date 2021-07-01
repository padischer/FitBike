<?php

function select_all_freebikes(): array
{
    global $db;
    $query = "SELECT * FROM bikes WHERE status = 'Frei'";
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement->fetchAll();
}

function select_all_lendedbikes(): array
{
    global $db;
    $query = "SELECT * FROM bikes WHERE status = 'Ausgehliehen'";
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement->fetchAll();
}

function select_membership(): array
{
    global $db;
    $query = "SELECT * FROM membership";
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement->fetchAll();
}

function insert_clientData($clientname, $email, $phonenumber)
{
    global $db;
    $query2 = 'INSERT INTO client (name, email, phonenumber) VALUES (:clientname, :email, :phonenumber)';
    $statement = $db->prepare($query2);
    $statement->bindValue(':clientname', $clientname, false);
    $statement->bindValue(':email', $email, false);
    $statement->bindValue(':phonenumber', $phonenumber, false);
    //$statement->bindValue(':membership', $membership);
    $statement->execute();
    $statement->closeCursor();
}