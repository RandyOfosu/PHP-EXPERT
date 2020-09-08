<?php

include 'include/db.conn.php';

$sql = "SELECT voornaam, achternaam FROM gebruikers VALUES (:ph_voornaam , :ph_achternaam)";

$voornaam = $_POST['form_voornaam'];
$achternaam = $_POST['form_achternaam'];

$stmt = $db_conn->prepare($sql);
$stmt->bindParam(":ph_voornaam", $voornaam);
$stmt->bindParam(":ph_achternaam", $achternaam);
$stmt->execute();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    body{
        font-family: monospace;
        background-color: beige;
    }
    table, tr, td, th {
        border: 1px solid black;
        border-collapse: collapse;
        text-align: left;
        padding-right: 20px;
    }
</style>

<body>
    <caption><h3>Je kan hier specifieke gegevens opvragen en bewerken.</h3></caption>
    <form action="overzicht_bewerken.php" method="post">
        Voornaam:
        <br>
        <input type="text" name="form_voornaam"><br>
        Achternaam:
        <br>
        <input type="text" name="form_achternaam"><br>
        <br>
        <input type="button" value="verzenden">
    </form>
    <br>

<p>Ga terug naar <a href="index.html">home</a>.</p>
</body>
</html>