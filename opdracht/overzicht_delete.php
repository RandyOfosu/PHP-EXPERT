<?php
include "include/db.conn.php";
include "index.php";
$uid = ($_GET['subject']);

$stmt = $db_conn->prepare("DELETE FROM gebruikers WHERE id = '$uid'");

$stmt->execute();
?>