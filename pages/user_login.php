<!doctype html>
<html lang=en>
<head>
  <meta charset="utf-8">
  <title>User login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../styles/general.css">
  <link rel="stylesheet" href="../styles/font.css">
  <link rel="stylesheet" href="../styles/login-register.css">
</head>
<body>
    <main>
        <a href="#"><img src="../assets/swift-logo.png" alt="Company logo"></a>
        <div class="wrap">
            <h1>Login</h1>
            <p>Enter your account details</p>
        <?php 
            require "../server/auto_include.php";

            // Handle input errors e.g. incorrect password, none existing accounts
            $flash = new Flash();
            $result = $flash->render('error');

            if (!empty($result)) {
                echo "<p class=\"error\">" . $result . "</p>";
            }
        ?>
        </div>
        <form action="../server/auth_user.php" method="post">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <a class="forgot-pass" href="#">Forgot password?</a>
            <input type="submit" value="Login">
        </form>
        <p>Don't have an account? <a href="create.html">Create now</a></p>
    </main>
    <script src="js/form_input_persist.js"></script>
</body>
</html>
