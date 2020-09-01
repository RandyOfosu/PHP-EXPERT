<?php

$db_lokatie     = 'localhost';
$db_naam        = 'toolsforever';
$db_gebruiker   = 'root';
$db_wachtwoord  = '';

$db_connectie = new PDO("mysql:host=$db_lokatie;dbname=$db_naam", $db_gebruiker, $db_wachtwoord);

$statement = $db_connectie->prepare('SELECT * FROM locations WHERE city = "Groningen"');
$statement->execute();
WHILE ($user = $statement->fetch()){
    $id = $user['id'];
    $address = $user['address'];
    $name = $user['name'];
    $city = $user['city'];

    echo $id ." ". $address ."<br>". $name ."<br>". $city . "<br>";
};



?>