<?php
  session_start();
  $count = 0;
  // connecto database

  $title = "Index";
  require_once "./template/header1.php";
  require_once "./functions/database_functions.php";
  $conn = db_connect();
  $row = select4LatestBook($conn);
?>
<div align="center">
  <form action="register.php" method="get">
    <p> Welcome to our site! Please register here!</p>
  <input type="submit" value="Register"/>
</form>
<form action="login.php" method="get">
  <p> Already have an account? Sign in here! </p>
  <input type="submit" value="Login"/>
</form>
</div>
<?php
  if(isset($conn)) {mysqli_close($conn);}
  require_once "./template/footer.php";
?>
