<?php

include 'include/db.conn.php';

$voornaam = $_POST['form_voornaam'];
$achternaam = $_POST['form_achternaam'];
$email = $_POST['form_email'];
$wachtwoord = $_POST['form_wachtwoord'];
$team = $_POST['form_team'];
$contributie = $_POST['form_contributie'];

$sql = "INSERT INTO gebruikers (firstname, lastname, email, wachtwoord, team, contributie) VALUES (:ph_voornaam , :ph_achternaam , :ph_email , :ph_wachtwoord , :ph_team , :ph_contributie)";

$stmt = $db_conn->prepare($sql);
$stmt->bindParam(":ph_voornaam", $voornaam);
$stmt->bindParam(":ph_achternaam", $achternaam);
$stmt->bindParam(":ph_email", $email);
$stmt->bindParam(":ph_wachtwoord", $wachtwoord);
$stmt->bindParam(":ph_team", $team);
$stmt->bindParam(":ph_contributie", $contributie);
$stmt->execute();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zaal voetbalclubASD!</title>
</head>
<body style="font-family: monospace; background-color: beige;">



    <h2>Je verzoek is correct afgehandeld</h2>
    <p>Geef nu door hoe jouw team heet!</p>
    <h3></h3>
    <form action="create_teams.php" method="post">
        Naam van het Team:
        <br>
        <input type="text" name="form_naam"><br>
        <br>
        <button type="submit">Verzenden</button>
    </form>
</body>
</html>