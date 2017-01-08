<?php

include_once('connection.php');

$idUser = $_GET['id_user'];
$idUserl = $_GET['id_userl'];

$q = mysqli_query($con, "SELECT chat.*, if (id_user = $idUser, id_userl, id_user) as lawan, if (id_user = $idUser, 'self', 'other') as tipe FROM chat WHERE (id_user = $idUser OR id_userl = $idUser) HAVING lawan = $idUserl ORDER BY waktu");

$res = array();

while ($h = mysqli_fetch_array($q))
{
	$res[] = $h;
}

echo json_encode($res);

?>