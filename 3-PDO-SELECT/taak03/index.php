<?php

$db_lokatie     = 'localhost';
$db_naam        = 'toolsforever';
$db_gebruiker   = 'root';
$db_wachtwoord  = '';

$db_connectie = new PDO("mysql:host=$db_lokatie;dbname=$db_naam", $db_gebruiker, $db_wachtwoord);

$statement = $db_connectie->prepare('SELECT * FROM users WHERE firstname = "Mohamed"');
$statement->execute();
WHILE ($user = $statement->fetch()){
    $firstname = $user['firstname'];
    $lastname = $user['lastname'];
    $email = $user['email'];
    $id = $user['id'];
    $password = $user['password'];

    echo $firstname ." ". $lastname ."<br>". $email ."<br>". $id . "<br>". $password;
};



?>