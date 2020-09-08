<?php

include 'include/db.conn.php';

$voornaam = $_POST['form_voornaam'];
$achternaam = $_POST['form_achternaam'];

$sql = "SELECT voornaam, achternaam FROM gebruikers SET voornaam = :ph_voornaam , achternaam = :ph_achternaam";

$stmt = $db_conn->prepare($sql);
$stmt->bindParam(":ph_voornaam", $voornaam);
$stmt->bindParam(":ph_achternaam", $achternaam);
$stmt->execute();

?>