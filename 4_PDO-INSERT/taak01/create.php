<?php

$db_loc = 'localhost';
$db_name = 'toolsforever';
$db_user = 'root';
$db_pw = '';

$db_conn = new PDO("mysql:host=$db_loc;dbname=$db_name", $db_user, $db_pw);

$firstName = $_POST['form_firstname'];
$lastName = $_POST['form_lastname'];
$email = $_POST['form_email'];

$sql = "INSERT INTO users (firstname, lastname, email) VALUES (:ph_firstname , :ph_lastname , :ph_email)";
$stmt = $db_conn->prepare($sql);
$stmt->bindParam(":ph_firstname", $firstName);
$stmt->bindParam(":ph_lastname", $lastName);
$stmt->bindParam(":ph_email", $email);
$stmt->execute();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nice!</title>
</head>
<body>
    <h3>Jouw verzoek is in correcte orde ontvangen!</h3>
</body>
</html>