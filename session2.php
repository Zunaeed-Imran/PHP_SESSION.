<?php
  session_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="session2.php" method="post">
    username:</br>
    <input type="text" name="username"></br>
    password:</br>
    <input type="password" name="password"></br>
    <input type="submit" name="login" value="login">
  </form>
</body>
</html>



<?php
  if(isset($_POST["login"])){

    if(!empty($_POST["username"]) &&
       !empty($_POST["password"])){

        $_SESSION["username"] = $_POST . "<br>";
        $_SESSION["password"] = $_POST . "<br>";

        header("location: sessionHome2.php");

     }else{
      echo "Missing username/password";
     }
  }
?>