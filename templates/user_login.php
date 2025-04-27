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
        <a href="../index.php"><img src="../assets/swift-logo.png" alt="Company logo"></a>
        <div class="wrap">
            <h1>Login</h1>
            <p class="p">Enter your account details</p>
        <?php
            // Handle input error messages e.g. incorrect password, none existing accounts.
            session_render_var("error");
        ?>
        </div>
        <form action="../server/auth_user_login.php" method="post">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <a class="forgot-pass" href="#">Forgot password?</a>
            <input type="submit" value="Login">
        </form>
        <p>Don't have an account? <a href="user_register.php">Join us</a></p>
    </main>
    <script src="js/form_input_persist.js"></script>
</body>
</html>
