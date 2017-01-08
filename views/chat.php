<!DOCTYPE html>
 
<html>
<head>
<title>Android, WebSockets Chat App | AndroidHive
    (www.androidhive.info)</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">

</head>
<body>
    <div class="body_container">

        <div id="header">
            <h1>Android WebSosckets Cheat Application<?php echo 'Pethes'; ?></h1>
            <p class='online_count'>
                <b>23</b> people online right now
            </p>
        </div>
 
        <div id="prompt_name_container" class="box_shadow">
            <p>Enter your name</p>
            <form id="form_submit" method="post"><script type="text/javascript" src="jquery-1.11.1.min.js"></script>
<link
    href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,300,700'
    rel='stylesheet' type='text/css'>
<link href="style.css" type="text/css" rel='stylesheet' />
<script type="text/javascript" src="m.js"></script>
                <input type="text" id="input_name" /> <input type="submit"
                    value="JOIN" id="btn_join">
            </form>
        </div>
 
        <div id="message_container" class="box_shadow">
 
            <ul id="messages">
            </ul>
 
 
            <div id="input_message_container">
                <form id="form_send_message" method="post" action="#">
                    <input type="text" id="input_message"
                        placeholder="Type your message here..." /> <input type="submit"
                        id="btn_send" onclick="send();" value="Send" />
                    <div class="clear"></div>
                </form>
            </div>
            <div>
 
                <input type="button" onclick="closeSocket();"
                    value="Leave Chat Room" id="btn_close" />
            </div>
 
        </div>
 
    </div>
 
</body>
</html>