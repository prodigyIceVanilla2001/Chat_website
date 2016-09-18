

<!DOCTYPE html>
<html>

    <head>
      <script type="text/javascript" src="/iQ/SCRIPT-JAVASCRIPT/GLOBAL-SLIDESHOW.js"></script>
      <link rel="stylesheet" type="text/css" href="/iQ/SCRIPT-CSS/GLOBAL.css"/>
      <link rel="stylesheet" type="text/css" href="/iQ/SCRIPT-CSS/CHAT.css"/>
    </head>

    <body>
      <nav class="nav">
        <ul class="nav_list">
            <li class="nav_item"><a href="/iQ/HOMEPAGE/index.php">Home</a></li>
            <li class="nav_item"><a class="active" href="index.php">Chat</a></li>
        </ul>
      </nav><br/><br/><br/>
      <?php
      require_once('../SCRIPT-PHP/GLOBAL.php');
      ?>
      <div id="chatbox" class="chatbox">

      </div>
      <input type="text" id="textbox" onkeypress="textbox_keypress(event)"/>
      <input type="button" id="button" onclick="button_click()" value="Send"/>
      <script type="text/javascript" src="/iQ/SCRIPT-JAVASCRIPT/CHAT-AJAX.js"></script>
    </body>
</html>
