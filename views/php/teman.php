<?php

include_once('connection.php');

$idUser = $_GET['id_user'];
$q = mysqli_query($con, "SELECT *, IF(id_user IN (SELECT IF(id_user = $idUser, id_userl, id_user) as tipe FROM teman WHERE (id_user = $idUser OR id_userl = $idUser) AND status = 'Confirm'), 'friend', 'no') as tipe FROM user WHERE id_user != $idUser ORDER BY tipe, nama");

$res = array();

while ($h = mysqli_fetch_array($q))
{
	$res[] = $h;
}

echo json_encode($res);

?>