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
    $query = 'SELECT * FROM membership';
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement->fetchAll();
}

function insert_clientData($clientname, $email, $phonenumber, $membership) : array
{

    global $db;
    $query2 = 'INSERT INTO client (name, email, phonenumber, membership) VALUES (:clientname, :email, :phonenumber, :membership)';
    $statement = $db->prepare($query2);
    $statement->bindValue(':clientname', $clientname);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':phonenumber', $phonenumber);
    $statement->bindValue(':membership', $membership);
    $statement->execute();
    return $statement->fetchAll();
}

function get_membershipID($membership) : int
{
    global $db;
    $query = "SELECT membershipID FROM membership WHERE membership = $membership";
    $statement = $db ->prepare($query);
    $statement->execute();
    return $statement->fetch();
}