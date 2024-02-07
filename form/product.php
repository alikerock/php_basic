<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>상품검색</title>
</head>
<body>
  <h1>상품검색</h1>
  
  <form action="get-input.php" novalidate>
    <input type="hidden" name="area" value="green">
    
    <div>
      <label for="email">email</label>
      <input type="email" name="email" id="email">
    </div>
    <div>
      <label for="category">category</label>
      <input type="text" name="category" id="category">
    </div>
    <div>
      <label for="productid">productid</label>
      <input type="text" name="productid" id="productid">
    </div>
    <div>
      <label for="limit">limit</label>
      <input type="text" name="limit" id="limit">
    </div>

    <button>검색</button>
  </form>
</body>
</html>