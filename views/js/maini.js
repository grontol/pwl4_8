	var idUserLain;
	var idUser = 2;
	
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
	var socket_url = '127.0.0.1';
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