<?php
require "include/db.conn.php";
$uid = ($_GET['subject']);

$stmt = $db_conn->prepare("DELETE FROM gebruikers WHERE id = :id");
$stmt->bindParam(':id', $uid);
$stmt->execute();
header("location: index.php");
?>