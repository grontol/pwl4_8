<?php

include_once('connection.php');

$idUser = $_GET['id_user'];
$idUserl = $_GET['id_userl'];

mysqli_query($con, "INSERT INTO teman VALUES ($idUser, $idUserl, 'Confirm')");

?>