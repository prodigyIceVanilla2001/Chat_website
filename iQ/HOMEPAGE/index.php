
<!DOCTYPE html>
<html>
    <head>
      <script type="text/javascript" src="/iQ/SCRIPT-JAVASCRIPT/GLOBAL-SLIDESHOW.js"></script>
      <link rel="stylesheet" type="text/css" href="/iQ/SCRIPT-CSS/GLOBAL.css"></link>
    </head>

    <body>
      <nav class="nav">
        <ul class="nav_list">
            <li class="nav_item"><a class="active" href="index.php">Home</a></li>
            <li class="nav_item"><a href="/iQ/CHAT/index.php">Chat</a></li>
        </ul>
      </nav><br/><br/><br/>
      <?php
      require_once('../SCRIPT-PHP/GLOBAL.php');
      ?>
      <form action="index.php" method="post" class="logout_button">
        <input type="submit" name="logout" id="logout" value="Logout"/>
      </form>

    </body>
</html>
