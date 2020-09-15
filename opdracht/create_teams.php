<?php

include 'include/db.conn.php';

$naam = $_POST['form_naam'];


$sql = "INSERT INTO teams (naam) VALUES (:ph_naam)";

$stmt = $db_conn->prepare($sql);
$stmt->bindParam(":ph_naam", $naam);
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
    <p>Alles is nu gereed, we wensen je succes!</p>

    <p>Wil je nog iemand toevoegen klik dan op deze <a href="index.php">link</a>.</p>

</body>
</html>