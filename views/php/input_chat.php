<?php

include_once('connection.php');

$idUser = $_GET['id_user'];
$idUserl = $_GET['id_userl'];
$pesan = $_GET['pesan'];

mysqli_query($con, "INSERT INTO chat (id_user, id_userl, pesan, waktu) VALUES ($idUser, $idUserl, '$pesan', NOW())");

?>