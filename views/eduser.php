<?php
require_once('../lib/view.php');
require_once('../models/muser.php');

?>

<html>
<head>

</head>
<body>
<form action="../controllers/euser.php" method="post" enctype="multipart/form-data">
    Username:<br />
    <input type="text" name="in_name" value="<?php echo $username;?>" readonly="true"> <br />
    Password:<br />
    <input type="password" name="in_password"> <br />
    Confirm Password:<br />
    <input type="password" name="repassword"><br />
    <input type="submit" name="edit" value="save">
    <input type="submit" name="hapus" value="hapus user">
</form>
</body>
</html>