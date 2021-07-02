
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
    <title>FitBike</title>
    <link rel='stylesheet' href="css/main.css">
</head>
<header>
    <h1>Bike lending</h1>
</header>

<body>
<div>
    <h2>Lend Bike</h2>
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
            <option>--Bitte Auswählen--</option>
            <?php
            $memberships = select_membership();
            foreach ($memberships as $membership){
                echo "<option>".$membership["membershipstatus"]."</option>";
            }
            ?>
        </select><br>
        <label for="rentBike">Available Bike:</label>
        <select id="rentBike" name="RentBike">
            <option>--Bitte Auswählen--</option>
            <?php
            $bikelist = select_all_freebikes();
            foreach ($bikelist as $bike){
                echo "<option>".$bike["name"]."</option>";
            }
            ?>
        </select><br>


        <?php
        /*
        $name = filter_input(INPUT_POST, 'Name', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'Email', FILTER_SANITIZE_EMAIL);
        $telephone = filter_input(INPUT_POST, 'Telephone', FILTER_SANITIZE_STRING);

        If (isset ($_POST['Member']))  {
            $membership=$_POST['Member'];
            $membership1 = $membership;
        }else{
            $membership1 = "keine";
        }
        $membership2 = get_membershipID($membership1);
        $insert = insert_clientData($name, $email, $telephone, $membership2);
        onclick=<?= $insert() ?>
        */
        ?>

        <!--<input type="submit" name="insert" value="insert" >-->
        <button>Submit</button>

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
            $bikelist = select_all_lentbikes();
            foreach ($bikelist as $bike){
                echo "<option>".$bike["name"]."</option>";
            }
            ?>
        </select><br>
        <button>Delete</button>
        <button>Mutate</button>
    </form>
</div>
</body>
</html>
