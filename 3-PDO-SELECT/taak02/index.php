<?php

$db_lokatie     = 'localhost';
$db_naam        = 'toolsforever';
$db_gebruiker   = 'root';
$db_wachtwoord  = '';

$db_connectie = new PDO("mysql:host=$db_lokatie;dbname=$db_naam", $db_gebruiker, $db_wachtwoord);

$sql = "SELECT * FROM locations";
$statement = $db_connectie->prepare($sql);
$statement->execute();
$database_gegevens = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach($database_gegevens as $locatie){  
  echo "<h3>".$locatie['name']. "</h3>";
  echo "Adres: ".$locatie['address']. "<br>";
  echo "Plaats: ".$locatie['city']. "<br>";
}


?>