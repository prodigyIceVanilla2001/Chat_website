<?php
session_start();
if(isset($_SESSION['logged'])){
  if($_SESSION['logged']=="true"){
    echo '<p class="welcome_text">Welcome '.$_SESSION['name'].'</p>';
  }
  else{
    header('Location: '.$_SESSION['addr'].'/iQ'.'/index.php?q=wrong_psswd');
  }
}
if(isset($_POST['logout'])){
  session_destroy();
  header('Location: http://'.$_SESSION['addr'].'/iQ'.'/index.php');
}
?>
