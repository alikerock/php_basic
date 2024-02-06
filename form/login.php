<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>login</h1>
    <form action="request.php" method="POST">
        <p>
            <label for="name">Name: </label>
            <input type="text" name="username" id="name">    
        </p>
        <p>
            <label for="email">Email: </label>
            <input type="email" name="useremail" id="email">    
        </p>
        <p>
            <input type="submit" value="로그인">
        </p>
    </form>
    <hr>
    <form action="search.php">
      <input type="search" name="keyword">
      <button>검색</button>
    </form>
</body>
</html>
