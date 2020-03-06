<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
  </head>
  <body>

<?php
  if(isset($_SESSION['u_name'])){
  echo '<div class="loginbereich">';
    echo '<form action="logout-inc.php" method="POST">';
    echo '<button type="submit" name="submit">logout</button>';
    echo '</form>';
  echo '</div>';
  }else{
  session_start();
  ob_start();
    /*include("includes/functions.php");
    include("includes/dbc-inc.php");
    //Zugriff auf die Datenbanken zum Auslesen der Werte-->
    $q = "SELECT * FROM user;";
    $res = mysqli_query($conn,$q) or die(mysql_error());
    $row = mysqli_fetch_assoc($res);
    mysqli_data_seek($res,0);$cr=0;
    while($row = mysqli_fetch_assoc($res)){
        $user[$cr]=$row['uname'];
        $cr++;
    }*/
    echo '<div class="grid_login">';
      echo '<div class="login">';
        echo '<form action="includes/login-inc.php" method="POST">';
        //echo get_options("uname",$user,'');
        echo '<input type="text" name="uname" placeholder="Benutzername"></br></br>';
        echo '<input type="password" name="pword" placeholder="Passwort"></br></br>
              <button type="submit" name="submit">login</button>
              </form>';
      echo '</div>';
    echo '</div>';
  }
?>
</body>
</html>
