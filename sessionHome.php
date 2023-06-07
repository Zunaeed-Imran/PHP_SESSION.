<?php
  session_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home page</title>
</head>
<body>
    this is Home page </br>
  <a href="session.php">go to login page</a><br>
</body>
</html>



<?php
  echo $_SESSION["username"] . "</br>";
  echo $_SESSION["password"] . "</br>";
?>