<?php

require_once('../lib/view.php');
require_once('../models/muser.php');
session_start();

$usera = new User();

if(!empty($_POST['edit'])){
    $data ['input_name']   = $_POST['in_name'];
    $data ['input_password'] = $_POST['in_password'];

    $usera->updateUser($_SESSION['pwl']['iduser'],$data);
    $success = "Data Berhasil di Tambahkan";
    header('location:../views/dashboard.php');
    require_once View::getView('../views/dashboard.php', null);
}
else if(!empty($_POST['hapus'])){
    $usera->deleteUser($_SESSION['pwl']['iduser']);
    $success = "Data Berhasil di Hapus";
    require_once View::getView('../views/login.php', null);
}
else {
    $a = $usera->readUser($_SESSION['pwl']['iduser']);

    $username = $a['nama'];
    require_once View::getView('../views/eduser.php', null);
}
