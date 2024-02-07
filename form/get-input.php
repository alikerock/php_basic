
<h1>get input</h1>
<?php
  $category = $_GET['category'];
  $product_id = $_GET['productid'];
  $limit = filter_input(INPUT_GET, 'limit', FILTER_VALIDATE_INT);
  $email = filter_input(INPUT_GET, 'email', FILTER_VALIDATE_EMAIL);

  if($limit == false){
   $limit = 10;
  }
  if($email == false){
   die();
  }
?>
<p>category : <?= $category;?></p>
<p>product id : <?= $product_id;?></p>
<p>limit : <?= $limit;?></p>