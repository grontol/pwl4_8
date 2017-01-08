<?php
require_once('../lib/view.php');
require_once('../models/muser.php');
session_start();
error_reporting(E_ERROR);
if(isset($_SESSION['pwl']['iduser'])){
    header('location:../views/dashboard.php');
}

$usera = new User();
    if (isset($_POST ['register'])) {
        if (!empty($_POST)) {
            $nama = $_POST['nama'];
            $username = $_POST['username'];
            $pass = $_POST['pass'];
            $usera->createUser($nama, $username, $pass);
            $success = "Data Berhasil di Tambahkan";
            header("location:../views/dashboard.php");

        } else {
            session_start();
            $error = '';

        }
    }
    else if (isset($_POST['login']))  {

        if (!empty($_POST['user']) && !empty($_POST['password'])) {
            $user = $_POST['user'];
            $password = $_POST['password'];
//            $user = stripslashes($user);
//            $password = stripslashes($password);
//
//            $user = mysqli_real_escape_string($user);
//            $password = mysqli_real_escape_string($password);

            $idUser = $usera->login($user,$password);

            if ($idUser != -1){

                $_SESSION['pwl']['iduser']=$idUser;
                $_SESSION ['pwl']['username']=$nama;
                header("location:../views/dashboard.php");
            }
            else
            {
                require_once View::getView('../views/vlogin.php', null);
            }
        }
        else
        {
            $error = "Username or Password is invalid";
            require_once View::getView('../views/vlogin.php', null);
        }
    }

    else {
        require_once View::getView('../views/vlogin.php', null);
    }
