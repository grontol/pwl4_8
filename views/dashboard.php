<?php
session_start();
if (!isset($_SESSION['pwl'])){
header('location:../index.php');
}
?>

<!doctype html>
<!--
  Material Design Lite
  Copyright 2015 Google Inc. All rights reserved.

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

      https://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License
-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Material Design Lite</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/android-desktop.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link rel="shortcut icon" href="images/favicon.png">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.cyan-light_blue.min.css">
    <link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" href="css/maini.css">
	
	<script type="text/javascript" src="jquery-1.11.1.min.js"></script>
	
  </head>
  <body>
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
      <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">Home</span>
          <div class="mdl-layout-spacer"></div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
            <div class="mdl-textfield__expandable-holder">
              <input class="mdl-textfield__input" type="text" id="search">
              <label class="mdl-textfield__label" for="search">Enter your query...</label>
            </div>
          </div>
          <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn">
            <i class="material-icons">more_vert</i>
          </button>
          <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
            <li class="mdl-menu__item">About</li>
            <li class="mdl-menu__item">Contact</li>
            <li class="mdl-menu__item">Legal information</li>
          </ul>
        </div>
      </header>
      <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
        <header class="demo-drawer-header">
          <img src="images/user.jpg" class="demo-avatar">
          <div class="demo-avatar-dropdown">
            <span id="nama"><?php echo $_SESSION['pwl']['username'];?></span>
            <div class="mdl-layout-spacer"></div>
            <button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
              <i class="material-icons" role="presentation">arrow_drop_down</i>
              <span class="visuallyhidden">Accounts</span>
            </button>
            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">
              <li class="mdl-menu__item"><a href="../controllers/euser.php">Setting</a></li>
              <li  class="mdl-menu__item"><a href="../controllers/logout.php">Logout</a></li>
            </ul>
          </div>
        </header>
        <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800" id="nav_teman">
			<script>
			
			</script>
        </nav>
      </div>
	  
	  <main class="mdl-layout__content mdl-color--grey-100">
		<h5 id="nama-teman">Chat Name</h5>
        <div class="mdl-grid demo-content">

          <div class="demo-graphs mdl-shadow--2dp mdl-color--white mdl-cell mdl-cell--8-col" id="chat_pesan" style="padding: 20px; padding-bottom: 15px;">
		  
          </div>
          <div class="demo-cards mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-grid mdl-grid--no-spacing">
            <div class="demo-separator mdl-cell--1-col"></div>
          </div>
 
            <div id="input-message-container" class="demo-graphs mdl-cell mdl-cell--8-col">
                <form id="form_send_message" method="post" action="#">
                    <input type="text" id="input-message" placeholder="Type your message here..." /> 
					<input type="submit" id="btn-send" onclick="send();" value="Send" />
                    <div class="clear"></div>
                </form>
            </div>
        </div>
		
		<div id="myModal" class="modal">

	  <!-- Modal content -->
		  <div class="modal-content">
				<div class="modal-header">
				  <span class="close">&times;</span>
				  <h2>Modal Header</h2>
				</div>
				<div class="modal-body">
				  <p>Some text in the Modal Body</p>
				  <p>Some other text...</p>
				</div>
				<div class="modal-footer">
				  <h3>Modal Footer</h3>
				</div>
			  </div>

		</div>
		
      </main>
    </div>
	
	
	  
    <script src="https://code.getmdl.io/1.2.1/material.min.js"></script>
	<script>

        var idUserLain;
        var idUser = <?php echo $_SESSION['pwl']['iduser'];?>;

        function fillFriend()
        {
            var x = new XMLHttpRequest();
            x.open("GET", "php/teman.php?id_user=" + idUser, false);
            x.send();
            var json = JSON.parse(x.responseText);

            $('#nav_teman').empty();

            for (var a = 0; a < json.length; a++)
            {
                var li;

                if (json[a].tipe === 'friend')
                    li = '<li class="teman-li" onclick="fillChat(' + idUser + ', ' + json[a].id_user + ', \'' + json[a].nama + '\')"><span>' + json[a].nama + '</span></li>';
                else
                    li = '<li class="noteman-li" onclick="addFriend(' + idUser + ', ' + json[a].id_user + ', \'' + json[a].nama + '\')"><span>' + json[a].nama + '</span></li>';

                $('#nav_teman').append(li);
            }
        }

        function addFriend(id, idl, namaL)
        {
            var r = confirm("Tambahkan " + namaL + " sebagai teman?");

            if (r == true)
            {
                var x = new XMLHttpRequest();
                x.open("GET", "php/add_friend.php?id_user=" + id + "&id_userl=" + idl, false);
                x.send();

                fillFriend();
            }
        }

        function fillChat(id, idl, namaL)
        {
            var x = new XMLHttpRequest();
            x.open("GET", "php/chat.php?id_user=" + id + "&id_userl=" + idl, false);
            x.send();
            var json = JSON.parse(x.responseText);
            $('#chat_pesan').empty();
            for (var a = 0; a < json.length; a++)
            {
                var li;

                if (json[a].tipe == 'self')
                    li = '<li><span class="message-tgl-self"><i>' + json[a].waktu + '</i></span></li>' +
                        '<li class="message-li"><span class="message-self"><i>' + json[a].pesan + '</i></span></li>';
                else
                    li = '<li class="message-li"><span class="message-tgl-other"><i>' + json[a].waktu + '</i></span></li>' +
                        '<li class="message-li"><span class="message-other"><i>' + json[a].pesan + '</i></span></li>';


                $('#chat_pesan').append(li);
            }

            idUserLain = idl;

            $('#nama-teman').html(namaL);
        }

        // to keep the session id
        var sessionId = '';

        // name of the client
        var name = '';

        // socket connection url and port
        var socket_url = '172.16.30.10';
        var port = '8080';

        var webSocket;

        $(document).ready(function() {

            $("#form_submit, #form_send_message").submit(function(e) {
                e.preventDefault();

            });

            openSocket();
            fillFriend();

        });

        /**
         * Will open the socket connection
         */
        function openSocket() {
            // Ensures only one connection is open at a time
            if (webSocket !== undefined && webSocket.readyState !== WebSocket.CLOSED) {
                return;
            }

            // Create a new instance of the websocket
            webSocket = new WebSocket("ws://" + socket_url + ":" + port
                + "/WebServer/chat?name=sd");

            /**
             * Binds functions to the listeners for the websocket.
             */
            webSocket.onopen = function(event) {
                $('#message_container').fadeIn();

                if (event.data === undefined)
                    return;

            };

            webSocket.onmessage = function(event) {

                // parsing the json data
                parseMessage(event.data);
            };

            webSocket.onclose = function(event) {
                alert('Error! Connection is closed. Try e again.' + event.code);
            };
        }

        /**
         * Sending the chat message to server
         */
        function send() {

            var message = $('#input-message').val();

            if (idUserLain === undefined)
            {
                alert('Pilih user untuk dichat!');
                return;
            }

            if (message.trim().length > 0)
            {
                sendMessageToServer(message);
                $('#input-message').val('');
            }
            else {
                alert('Tuliskan pesan!');
            }

        }

        /**
         * Closing the socket connection
         */
        function closeSocket() {
            webSocket.close();

            sessionId = '';
            name = '';
        }

        /**
         * Parsing the json message. The type of message is identified by 'flag' node
         * value flag can be self, new, message, exit
         */
        function parseMessage(message) {
            var jObj = $.parseJSON(message);
            var msg = $.parseJSON(jObj.message);

            var idU = msg.idUser;
            var idL = msg.idUserLain;

            if ((idU === idUser && idL === idUserLain) || (idU === idUserLain && idL === idUser))
            {
                fillChat(idUser, idUserLain);
            }
        }

        /**
         * Appending the chat message to list
         */
        function appendChatMessage(li) {
            $('#messages').append(li);

            // scrolling the list to bottom so that new message will be visible
            $('#messages').scrollTop($('#messages').height());
        }

        /**
         * Sending message to socket server message will be in json format
         */
        function sendMessageToServer(message) {
            var json = '{""}';

            var x = new XMLHttpRequest();
            x.open("GET", "php/input_chat.php?id_user=" + idUser + "&id_userl=" + idUserLain + "&pesan=" + message, false);
            x.send();

            var msg = new Object();
            msg.idUser = idUser;
            msg.idUserLain = idUserLain;

            // preparing json object
            var myObject = new Object();
            myObject.sessionId = sessionId;
            myObject.message = msg;

            // converting json object to json string
            json = JSON.stringify(myObject);

            // sending message to server
            webSocket.send(json);
        }

    </script>
	
  </body>
</html>
