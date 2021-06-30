<?php
//Herstellung Verbindung Datenbank
$dsn = 'mysql:host=localhost;dbname=world';
$username = 'root';
$password = 'root';

//JS Try/Catch-Block
try {
    //$db = new PDO($dsn, $username);
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    $error_message = 'Database Error: ';
    $error_message .= $e->getMessage();
    exit();
}
?>
