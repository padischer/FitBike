<?php

$bike = filter_input(INPUT_GET, "name", FILTER_SANITIZE_STRING);
$bikestate = filter_input(INPUT_GET, "state", FILTER_SANITIZE_STRING);
$newbike = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
$newemail = filter_input(INPUT_POST, "email", FILTER_SANITIZE_STRING);
$newtelefon = filter_input(INPUT_POST, "telefon", FILTER_SANITIZE_STRING);
$newmemberstate = filter_input(INPUT_POST, "memberstate", FILTER_SANITIZE_STRING);
$newrent = filter_input(INPUT_POST, "rentDate", FILTER_SANITIZE_STRING);

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel='stylesheet' href="../css/main.css">
</head>
<body>

<section>
    <h2>Select Data / Read Data</h2>
    <form action="." method="GET">
        <input type="hidden" name="action" value="select">
        <label for="bike">Bike:</label>
        <select id="bike" name="Bike" required>
            <option>Test1</option>
            <option>Test2</option>
        </select>
        <button>Submit</button>
    </form>
</section>
<section>
    <h2>Insert Data / Create Data</h2>
    <form action="." method="POST">
        <input type="hidden" name="action" value="insert">
        <label for="name">Client Name:</label>
        <input type="text" id="name" name="Name" required><br>
        <label for="email">E-Mail:</label>
        <input type="text" id="email" name="Email" required><br>
        <label for="telefon">Tekefon:</label>
        <input type="text" id="telefon" name="Telefon"><br>
        <label for="mitglied">Mitglied-Status:</label>
        <select id="mitglied" name="Mitglied" required>
            <option>Keine</option>
            <option>Bronze</option>
            <option>Silber</option>
            <option>Gold</option>
        </select><br>
        <label for="rentBike">Ausgeliehenes Bike:</label>
        <input type="text" id="rentBike" name="RentBike" required><br>
        <button>Submit</button>
    </form>
</section>
</body>
</html>