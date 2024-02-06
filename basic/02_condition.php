<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>조건문</title>
</head>
<body>
  <h1>조건문</h1>
  <?php
    $result = 1>3; 
    echo $result; //1 true, false
    //false 이면 아무것도 출력안됨.  
  ?>
  <hr>
  <pre>
    if(조건){
      참이면 할일
    } else {
      거짓이면 할일
    }
  </pre>
  <?php
    $num1 = 1;
    $num2 = 3;
    if($num1<$num2){
      echo $num1.'은 '. $num2.'보다 작다';
    } else{
      echo $num1.'은 '. $num2.'보다 크다';
    }
  ?>
  <h2>논리 연산자</h2>
  <pre>
    A && B //A와B가 둘다 참일때 - 결과 참
    A || B //A와B가 둘중 하나라도 참일때 - 결과 참
  </pre>
  <?php
    if(1>3 && 2<5){
      echo '조건은 참이다';
    } else{
      echo '조건은 거짓이다';
    }
  ?>
  <hr>
  <?php
    if(1>3 || 2<5){
      echo '조건은 참이다';
    } else{
      echo '조건은 거짓이다';
    }
  ?>
  <pre>
  && -> and
  || -> or
  </pre>
  <?php
    if(1>3 and 2<5){
      echo '조건은 참이다';
    } else{
      echo '조건은 거짓이다';
    }
  ?>  
  <hr>
  <pre>
  xor  논리식이 서로 다르면 참을 반환함

  </pre>
  <?php
    if(1>3 xor 2>5){  // 참 참 -> 거짓
      echo '조건은 참이다';
    } else{
      echo '조건은 거짓이다';
    }
  ?>  
  
</body>
</html>