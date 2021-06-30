<?php
include ('../model/database.php');
include ('../model/fitbike_db.php');
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
<header>
    <h1>Bike Ausleihe</h1>
</header>

<body>

<div>
    <h2>Select Data / Read Data</h2>
    <form action="." method="GET">
        <input type="hidden" name="action" value="select">
        <label for="bike">Bike:</label>
        <select id="bike" name="Bike" required>

            <?php


            $bikelist = select_all_bikes();
            foreach ($bikelist as $bike){
                echo "<option>".$bike["name"]."</option>";
            }

            ?>



        </select>
        <button>Submit</button>
    </form>
</div>
<div>
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
        <select id="rentBike" name="RentBike", required>


        </select>


        <input type="text" id="rentBike" name="RentBike" required><br>
        <button id="boton">Submit</button>
    </form>
</div>
</body>
</html>