<?php

include 'include/db.conn.php';

$firstName = $POST_['form_firstName']

$sql = "UPDATE users SET firstname = :ph_firstname";
$stmt = $db_conn->prepare($sql);
$stmt->bindParam(":firstname", $form_firstname );
$stmt->execute();

?>

