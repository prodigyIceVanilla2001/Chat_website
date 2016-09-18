<?php
define('host','localhost');
define('user','root');
define('password','');
define('db','chat_database');
$conn=mysqli_connect(host,user,password,db);
if($conn==false)
{
  die("I am sooooo sorry, it seems that SQL is not working properly, please contact the admin");
}
 ?>
