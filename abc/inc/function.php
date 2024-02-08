<?php
  function output($value){
    echo '<pre>';
    print_r($value);
    echo '</pre>';
  }

  function authenticate_user($email,$password){
    if($email == USER_NAME && $password == PASSWORD){
      return true;
    }
  }

  function redirect($url){
    header("Location:$url");
  }

  function user_is_authenticated(){
    return isset($_SESSION['email']);
  }

  function ensure_user_is_authenticated(){ //관리자(로그인) 여부 판단
    if(!user_is_authenticated){
      redirect("$SITE/login.php");
      die();
    }
  }
?>