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
    <h2>lend Bike</h2>
    <form method="POST">
        <input type="hidden" name="action" value="insert">
        <label for="name">Client Name:</label>
        <input type="text" id="name" name="Name" required><br>
        <label for="email">E-Mail:</label>
        <input type="text" id="email" name="Email" required><br>
        <label for="telephone">Telephone:</label>
        <input type="text" id="telephone" name="Telephone"><br>
        <label for="member">Membership-Status:</label>
        <select id="member" name="Member" required>

            <?php
            $memberships = select_membership();
            foreach ($memberships as $membership){
                echo "<option>".$membership["membership"]."</option>";
            }
            ?>
        </select><br>
        <label for="rentBike">Verfügbares Bike:</label>
        <select id="rentBike" name="RentBike">

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
        $memberShip = filter_input(INPUT_POST, 'Member', FILTER_SANITIZE_NUMBER_INT);
        $membership1 = get_membershipID($memberShip);
        $insert = insert_clientData($name, $email, $telephone, $membership1);
        ?>
        <input type="submit", name="insert", value="insert", onclick=<?= $insert ?>>
        <button id="botton">Submit</button>

    </form>
</div>
<div>
    <h1>Delete or Mutate lending</h1>
    <form method="GET">
        <input type="hidden" name="action" value="select">
        <label for="bike">lent Bike:</label>
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
</div>
</body>
</html>
```