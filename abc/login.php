<?php
  $title = 'Login';
  include('inc/header.php');
  include('config.php');  
  include('inc/function.php');
  
  if(user_is_authenticated){ //이미 관리자로 로그인한 유저를 관리자페이지로 이동.
    redirect('adm/index.php');
    die();
  }

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $password = $_POST['password'];

    //관리자 인증
    if(authenticate_user($email,$password)){
      $_SESSION['email'] = $email;
      redirect('./adm/index.php');
    } else{
      $status = '관리자 정보를 다시 확인하세요';
    }

    if($email == false){
      $status = '이메일 형식으로 입력하세요!';
    }
    
  }
  // echo $_SERVER['HTTP_USER_AGENT'];
  // echo $_SERVER['SERVER_NAME'];   //localhost, abc.com
  // echo $_SERVER['REQUEST_URI'];   // /abc/search.php?query="신상품"
  // echo $_SERVER['PHP_SELF'];      // /abc/search.php
?>

  <h2>Login</h2>
  <p>로그인해주세요</p>
<form action="" method="POST" novalidate>
  <p>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email">
  </p>
  <p>
    <label for="password">password:</label>
    <input type="password" name="password" id="password">
  </p>
  <button>로그인</button>
</form>
<div class="error">
  <?php
    if(isset($status)){
      echo $status;
    }
  ?>
</div>

<?php
  include('inc/footer.php');
?>