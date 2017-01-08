<?php

require_once('lib/view.php');
function Redirect($url, $permanent = false)
{
    header('Location: ' . $url, true, $permanent ? 301 : 302);
    exit();
}
Redirect('controllers/cuser.php', false);
?>