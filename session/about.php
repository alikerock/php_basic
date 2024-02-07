<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>about us</h1>
  <p>
    <a href="index.php">index</a> /
    <a href="about.php">about</a> /
    <a href="logout.php">logout</a>
  </p>
  <?php    

    //if($_SESSION != null && isset($_SESSION) == true){
    if(count($_SESSION)> 0){
      echo "{$_SESSION['city']}시{$_SESSION['gu']}구 값의 세션이 생성되었습니다.";
    }else{
      echo "세션값이 없습니다.";
    }
  ?>

</body>
</html>