<?php

require_once('../lib/view.php');
require_once('../models/muser.php');

$usera = new User();

if(!empty($_POST['hapus'])){

    $usera->deleteUser($id);
    $success = "Data Berhasil di Hapus";

    require_once View::getView('../views/login.php', null);
}
else {
    require_once View::getView('../views/dashboard.php', null);
}