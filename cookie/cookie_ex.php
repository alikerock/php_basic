<?php
$cookieName = 'city';
$cookieValue = 'seoul';
setcookie($cookieName, $cookieValue, time()+60);  /* 1s */
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>쿠키 연습</title>
</head>
<body>
  <h1>쿠키 연습</h1>
  <h2>쿠키출력</h2>
  <p>
    <?php
     echo "{$cookieName}라는 쿠키의 값은 {$_COOKIE[$cookieName]}입니다.";
    ?>
  </p>
  <p><?= $cookieName; ?>라는 쿠키의 값은 <?= $_COOKIE[$cookieName]; ?>입니다.</p>
</body>
</html>