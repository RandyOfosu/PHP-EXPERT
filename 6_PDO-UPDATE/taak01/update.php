<?php

include 'include/db.conn.php';

$form_firstname = $_POST['form_firstname'];

$sql = "UPDATE users SET firstname = :ph_firstname";
$stmt = $db_conn->prepare($sql);
$stmt->bindParam(":ph_firstname", $form_firstname );
$stmt->execute();

?>