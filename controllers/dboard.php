<?php

require_once('../lib/view.php');
require_once('../models/muser.php');


if(!empty($_POST)){
    require_once View::getView('../views/dashboard.php', null);

}
else {
    $success = "Data Berhasil di Tambahkan";
    require_once View::getView('../views/dashboard.php', null);
}