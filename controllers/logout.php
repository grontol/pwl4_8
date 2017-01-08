<?php
session_start();
unset($_SESSION['pwl']);
session_destroy();
header("location:../index.php");
exit();
?>