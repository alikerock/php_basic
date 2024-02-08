<?php
  session_start();
  include('../config.php');  
  include('../inc/function.php');  
  echo $_SESSION['email'];
  if($_SESSION['email'] != USER_NAME){
    redirect('../login.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>관리자 페이지</title>
</head>
<body>
  <h1>관리자 페이지</h1>
  <h2>***님 반갑습니다.</h2>
  <p>
    <a href="logout.php">logout</a>
  </p>
</body>
</html>