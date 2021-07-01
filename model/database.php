<?php

//Herstellung Verbindung Datenbank
$dsn = 'mysql:host=localhost;dbname=FitBike';
$host = 'localhost';
$dbname = 'FitBike';
$username = 'root';
$password = '';
$options = null;
//JS Try/Catch-Block
try {
    $db = new PDO($dsn, $username);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    $error_message = 'Database Error: ';
    $error_message .= $e->getMessage();

    exit();
}
?>
