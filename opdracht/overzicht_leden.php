<?php

include 'include/db.conn.php';

$sql = "SELECT * FROM gebruikers";
$stmt = $db_conn->prepare($sql);
$stmt->execute();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overzicht teams</title>
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

<p><strong>Ga terug naar <a href="index.html">home</a>.</strong></p>

<table>
    <caption><h4>Gegevens leden</h4></caption>
    <tr>
        <th>Voornaam</th>
        <th>Achternaam</th>   
        <th>Email</th>
        <th>Team</th>
        <th>Contributie</th>
    </tr>
    <tr>
    <?php foreach($stmt as $gebruikers => $rows): ?>
        <td><?=$rows['voornaam']?></td>
        <td><?=$rows['achternaam']?></td>
        <td><?=$rows['email']?></td>
        <td><?=$rows['team']?></td>
        <td><?=$rows['contributie']?></td>
    </tr>
    <?php endforeach;?>
</table>
<p>Klik <a href="overzichten_bewerken.php">hier</a> als je de overzichten wil bewerken.</p>

<p>En</p>

<p>Klik <a href="overzicht_teams.php">hier</a> voor een overzicht van de teams.</p>

</body>
</html>