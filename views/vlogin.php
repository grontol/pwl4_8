<?php
    session_start();
$user = ['user'];
$password = ['password'];
?>
<html>
<head>
    <link rel="stylesheet" href="../asset/style.css" type="text/css">
</head>
<body>
<div class="cotn_principal">
    <div class="cont_centrar">
        <div class="cont_login">
            <div class="cont_info_log_sign_up">
                <div class="col_md_login">
                    <div class="cont_ba_opcitiy">
                        <h2>LOGIN</h2>
                        <button class="btn_login" onclick="cambiar_login()">LOGIN</button>
                    </div>
                </div>
                <div class="col_md_sign_up">
                    <div class="cont_ba_opcitiy">
                        <h2>SIGN UP</h2>
                        <button class="btn_sign_up" onclick="cambiar_sign_up()">SIGN UP</button>
                    </div>
                </div>
            </div>
            <div class="cont_back_info">
                <div class="cont_img_back_grey">
                    <img src="../asset/blog.jpg" alt="https://images.unsplash.com/42/U7Fc1sy5SCUDIu4tlJY3_NY_by_PhilippHenzler_philmotion.de.jpg?ixlib=rb-0.3.5&q=50&fm=jpg&crop=entropy&s=7686972873678f32efaf2cd79671673d" />
                </div>
            </div>
            <form method="post" action="../controllers/cuser.php">
            <div class="cont_forms" >
                <div class="cont_img_back_">
                    <img src="../asset/blog.jpg" alt="https://images.unsplash.com/42/U7Fc1sy5SCUDIu4tlJY3_NY_by_PhilippHenzler_philmotion.de.jpg?ixlib=rb-0.3.5&q=50&fm=jpg&crop=entropy&s=7686972873678f32efaf2cd79671673d" />
                </div>
                <div class="cont_form_login">
                    <a href="#" onclick="ocultar_login_sign_up()" ><i class="material-icons">&#xE5C4;</i></a>
                    <h2>LOGIN</h2>
                    <input type="text" name="user" placeholder="User name" />
                    <input type="password" name="password" placeholder="Password" />
                    <button type="submit" name="login" class="btn_login" onclick="cambiar_login()">LOGIN</button>

                </div>
                <div class="cont_form_sign_up">
                    <a href="#" onclick="ocultar_login_sign_up()"><i class="material-icons">&#xE5C4;</i></a>
                    <h2>SIGN UP</h2>
                    <input type="text" name="nama" placeholder="Name" value=""/>
                    <input type="text" name="username" placeholder="User name" value="" />
                    <input type="password" id="pass" name="pass"  placeholder="Password" value=""/>
                    <input type="password" id="pass2" placeholder="Confirm Password" />
                    <button type="submit" name="register" class="btn_sign_up" onclick="cambiar_sign_up()">SIGN UP</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript" src="../asset/login.js"></script>
</body>
</html>