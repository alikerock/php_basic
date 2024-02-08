<?php
  session_start();
  require_once('../config.php');  
  require_once('../inc/function.php');  

  ensure_user_is_authenticated();

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
  <h2><?= $_SESSION['email']; ?>님 반갑습니다.</h2>
  <p>
    <a href="logout.php">logout</a>
  </p>
</body>
</html>