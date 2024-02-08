<?php
  session_start();
  session_unset();
  session_destroy();
  include('../inc/function.php');  
  redirect('../login.php');
?>