<?php

$db_loc = 'localhost';
$db_name = 'voetbalclubasd';
$db_user = 'root';
$db_pw = '';

$db_conn = new PDO("mysql:host=$db_loc;dbname=$db_name", $db_user, $db_pw);
?>