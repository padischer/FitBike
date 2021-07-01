```
<?php
include('model/database.php');
include('model/fitbike_db.php');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel='stylesheet' href="css/main.css">
</head>
<header>
    <h1>Bike Ausleihe</h1>
</header>

<body>
<div>
    <h2>Informationen</h2>
    <form action="../../../../Users/moizj/OneDrive%20-%20Kt.%20SG%20BLD/KSB%20IMS/2.%20Jahr/Informatik/Modul%20307/FitBike-master" method="GET">
        <input type="hidden" name="action" value="select">
        <label for="bike">Ausgeliehenes Bike:</label>
        <select id="bike" name="Bike" required>
            <option>--Bitte Auswählen--</option>
            <?php
            $bikelist = select_all_lendedbikes();
            foreach ($bikelist as $bike){
                echo "<option>".$bike["name"]."</option>";
            }
            ?>
        </select>
    </form>
    <form action="../../../../Users/moizj/OneDrive%20-%20Kt.%20SG%20BLD/KSB%20IMS/2.%20Jahr/Informatik/Modul%20307/FitBike-master" method="POST">
        <input type="hidden" name="action" value="insert">
        <label for="name">Client Name:</label>
        <input type="text" id="name" name="Name" required><br>
        <label for="email">E-Mail:</label>
        <input type="text" id="email" name="Email" required><br>
        <label for="telephone">Telephone:</label>
        <input type="text" id="telephone" name="Telephone"><br>
        <label for="member">Membership-Status:</label>
        <select id="member" name="Member" required>
            <option>--Bitte Auswählen--</option>
            <?php
            $memberships = select_membership();
            foreach ($memberships as $membership){
                echo "<option>".$membership["membership"]."</option>";
            }
            ?>
        </select><br>
        <label for="rentBike">Verfügbares Bike:</label>
        <select id="rentBike" name="RentBike" , required>
            <option>--Bitte Auswählen--</option>
            <?php
            $bikelist = select_all_freebikes();
            foreach ($bikelist as $bike){
                echo "<option>".$bike["name"]."</option>";
            }
            ?>
        </select><br>
        <?php
        $name = filter_input(INPUT_POST, 'Name', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'Email', FILTER_SANITIZE_EMAIL);
        $telephone = filter_input(INPUT_POST, 'Telephone', FILTER_SANITIZE_STRING);
        insert_clientData($name,$email,$telephone);
        if ($name == NULL && $email == NULL && $telephone == NULL){
            echo "no Data";
            echo $name;
            echo $email;
            echo $telephone;
        }else{
            echo "where server";
            echo $name;
            echo $email;
            echo $telephone;
            insert_clientData($name,$email,$telephone);
        }
        ?>
        <button id="botton">Submit</button>
    </form>
</div>
</body>
</html>
```