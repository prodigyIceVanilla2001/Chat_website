<?php
session_start();
require_once("CONNECT-TO-DATABASE.php");
/**
 *
 */

class DATABASE_HANDLER_CLASS {
  function __construct($conn){
    $this->conn=$conn;
  }
   public $conn;
  function getMessage(){
    $query="SELECT * FROM chat ORDER BY posted_on";
    $data=$this->conn->query($query);
    return $data;
  }
  function sendMessage($message){
    $this->conn->query('INSERT INTO chat (posted_on, username, message) VALUES (CURRENT_TIME, "'.$_SESSION['name'].'","'.$message.'")');
  }
  function deleteMessage(){
    $this->conn->query('TRUNCATE TABLE chat');
  }
}
?>
<?php
  //==============GETTING POST REQUESTS=========================================
  $dbh=new DATABASE_HANDLER_CLASS($conn);
  if($_POST['mode']=="get"){
  $data=$dbh->getMessage();
  while($row=$data->fetch_assoc()){
    echo '<div class="chat_text" color="blue">'.$row['posted_on'].':'.$row['username'].': '.$row['message'].'</element>'.'<br/>';
  }
  }
  if(($_POST['mode']=="send")&&($_POST['message']!='')){
    $dbh->sendMessage($_POST['message']);
  }
  if(($_POST['mode']=="delete")){
    $dbh->deleteMessage();
  }
  //============================================================================
 ?>
