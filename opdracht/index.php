<a href="overzicht_leden.php">Alle Leden</a>
<a href="overzicht_teams.php">Alle Teams</a>


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
<table>

<?php
include "include/db.conn.php";
  $sql = "SELECT id, firstname, lastname, email, wachtwoord, team, contributie FROM gebruikers";
  $result = $db_conn->query($sql);
  function delete(){
    $stmt->execute();
  }
    foreach($result as $row){
        $idname = $row['id'];
      echo "<tr>". "<td> ID: ".$row['id'] . "</td><td>voornaam: " . $row['firstname'] . "</td><td> achternaam: " . $row['lastname'] . "</td><td> email: " . $row['email'] ."</td><td>"."<a href='overzicht_delete.php?subject=$idname'>delete row</a>"."<br>"."</td>"."</td><td>"."<a href='overzicht_bewerken.php?subject=$idname'>inspect row</a>"."<br>"."</td>"."</tr>";
    }

    echo "<p>Ik wil mij graag <a href='inschrijven.php'>inschrijven</a>.</p>";
?>
  </table>
</body>
</html>

