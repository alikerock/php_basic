<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>function</h1>
  <?php
    $greeting = 'hello world';

    function sum($a, $b){
      global $greeting; //변수명 $greeting을 전역변수로 등록
      echo $greeting;
      $result = $a + $b;
      return $result;
    }
    $total = sum(10,20);
    echo $total;
  ?>
  <h2>지역변수</h2>
  <?php
    function myFunc(){
      $var = 10;
      echo "함수 내부에서 호출한 지역 변수 var의 값은 {$var} 입니다.";
    }
    myFunc();
    echo "함수 내부에서 호출한 지역 변수 var의 값은 {$var} 입니다.";
  ?>
  <h2>전역변수</h2>
  <?php
    $var = 10;
    function myFunc2(){
      echo "함수 내부에서 호출한 지역 변수 var의 값은 {$var} 입니다.";
      echo "함수 내부에서 호출한 지역 변수 var의 값은 {$GLOBALS['var']} 입니다.";
      global $var;
      echo "함수 내부에서 호출한 지역 변수 var의 값은 {$var} 입니다.";
    }
    myFunc2();
  ?>
  <h2>정적 변수(static variable)</h2>
  <?php
    function counter(){
      static $count = 0; //정적 변수
      echo "함수 내부에서 생성된 변수 count의 값은 {$count}이다<br>";
      $count++;
      echo "함수 내부에서 생성된 변수 count의 값은 {$count}이다<br>";
    }
    counter();
    counter();

  ?>
</body>
</html>