
<html>
    <head>

    </head>

    <body>
      <form action="index.php" method="post">
        <p class="text">Username:</p>
        <input type="text" name="username"/><br/>
        <p class="text">Password:</p>
        <input type="password" name="password"/><br/>
        <input type="submit" name="submit" value="Login"/>
      </form>
      <?php
      
      //------------------HERE YOU MUST CHANGE THE DATABASE INFO TO YOUR DATABASE INFO--------------------
      define("host","localhost");
      define("user","root");
      define("password","");
      define("db","chat_database");
      session_start();
      //--------------------------------------------------------------------------------------------------
      

      //-------------- HERE YOU MUST CHANGE THIS SESSION TO YOUR SERVER IP ADDRES ------------------------
      $_SESSION['addr']="localhost";
      //--------------------------------------------------------------------------

     //----------------------------------------------- LOGIN FORM----------------------------------------
      @$username=$_POST['username'];
      @$password=$_POST['password'];
      if(isset($_POST['submit'])){
      $passed=false;
      if(($username!="")&&($password!="")){
        $conn=mysqli_connect(host,user,password,db);
        $query="SELECT * FROM login_profiles";
        $data=$conn->query($query);
        while($row=$data->fetch_assoc()){
          if(($username==$row['USERNAME'])&&($password==$row['USERPASSWORD'])){
            $_SESSION['logged']="true";
            $_SESSION['name']=$username;
            $passed=true;
          }
        }
        if($passed==false){
          header("Location: index.php?q=wrong_psswd");
        }
      }
      if($username==""){
        echo '<p class=text>Username is empty</p>';
      }
      if($password==""){
        echo '<p class="text">Password is empty</p>';
      }

      }
      if(isset($_SESSION['logged'])){
      if($_SESSION['logged']=="true")
      {
        header("Location: http://".$_SESSION['addr'].'/iQ'.'/HOMEPAGE/'.'/index.php');
      }
      }
      //--------------------------------------------------------------------------------------------------

      ?>
      <?php
      //-------------------------------- IF WRONG PASSWORD------------------------------------------------
        if(isset($_GET['q'])){
          if($_GET['q']=="wrong_psswd"){
            echo '<p class="text">Sorry wrong username or password</p>';
          }
        }
     //--------------------------------------------------------------------------------------------------
      ?>
      
    </body>
</html>
