
var chatbox=document.getElementById('chatbox');
var textbox=document.getElementById('textbox');
var button=document.getElementById('button');
var get_message_timeout=2000;
var xhttp=new XMLHttpRequest();


function textbox_keypress(event){
  //-------------------------WHEN PRESS ENTER-----------------------------------
  if(event.keyCode==13){
    preSend();
  }
  //----------------------------------------------------------------------------
}


//------------------------WHEN BUTTON SEND IS PRESSED---------------------------
function button_click(){
preSend();
}
//------------------------------------------------------------------------------

//GETTING MESSAGE FIRST TIME
getMessage(0);

//SCROOL MESSAGE FIRST TIME
scroll();


function preSend(){
  sendMessage(0);
  // ----------- YOU CAN LIST CHAT-COMMANDS RIGHT HERE--------------------------
  if(textbox.value=="/clear"){
    xhttp.open("POST","/iQ/SCRIPT-PHP/DATABASE-HANDLER.php",true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("mode=delete");
    alert("deleting messages");
  }
  // ---------------------------------------------------------------------------
  getMessage();
  textbox.value="";
}
/*
    http.open("POST","some_php_file.php",true);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
*/


//--------------------- SEND THE MESSAGE PASS THE *timout* attribute -----------
function sendMessage(timeout){
  xhttp.open("POST","/iQ/SCRIPT-PHP/DATABASE-HANDLER.php",true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("mode=send&message="+textbox.value);
}
//------------------------------------------------------------------------------


//------------- GETTING THE MESSAGES PASS THE *timeout* attribute --------------
function getMessage(timeout){
  xhttp.open("POST","/iQ/SCRIPT-PHP/DATABASE-HANDLER.php",true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.onreadystatechange=function(){
    setTimeout(function () {
      if((xhttp.readyState==4)&&(xhttp.status==200)){
      chatbox.innerHTML=xhttp.responseText;
      scroll();
    }
    }, timeout);
  }
  xhttp.send("mode=get");
}
//------------------------------------------------------------------------------


// SETTING INTERVAL FOR GETTING MESSAGE --- > EVERY 2 SECONDS
setInterval(function(){
  getMessage(1000);
},get_message_timeout);
//-----------------------------------------------------------
