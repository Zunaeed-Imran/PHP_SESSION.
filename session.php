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
  this is login page </br>
  <a href="sessionHome.php">Go to Home page</a><br>
</body>
</html>



<?php
  $_SESSION["username"] = "Imran";
  $_SESSION["password"] = "pizza123";

  echo $_SESSION["username"] . "</br>";
  echo $_SESSION["password"] . "</br>";
?>