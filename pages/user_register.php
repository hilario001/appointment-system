<?php ?>
<!doctype html>
<html lang=en>
<head>
  <meta charset="utf-8">
  <title>Register</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <h1>Create an account</h1>
    <form action="register.php" method="post"> 
        <input type="text" name="email" placeholder="Email" required></input>
        <input type="text" name="password" placeholder="Password" required></input>
        <input type="submit" value="Submit">
    </form>
    <script src="script.js"></script>
</body>
</html>
