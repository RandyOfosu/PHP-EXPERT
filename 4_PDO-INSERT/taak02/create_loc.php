<?php

$db_loc = 'localhost';
$db_name = 'toolsforever';
$db_user = 'root';
$db_pw = '';

$db_conn = new PDO("mysql:host=$db_loc;dbname=$db_name", $db_user, $db_pw);

$name = $_POST['form_name'];
$address = $_POST['form_address'];
$city = $_POST['form_city'];

$sql = "INSERT INTO locations (name, address, city) VALUES (:ph_name , :ph_address, :ph_city)";
$stmt = $db_conn->prepare($sql);
$stmt->bindParam(":ph_name", $name);
$stmt->bindParam(":ph_address", $address);
$stmt->bindParam(":ph_city", $city);
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
    <h3>Jouw verzoek is in goede orde ontvangen!</h3>
</body>
</html>