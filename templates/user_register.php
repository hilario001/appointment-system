<?php ?>
<!doctype html>
<html lang=en>
<head>
    <meta charset="utf-8">
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../styles/general.css">
    <link rel="stylesheet" href="../styles/font.css">
    <link rel="stylesheet" href="../styles/login-register.css">
</head>
<body>
    <main>
        <a href="../index.php"><img src="../assets/swift-logo.png" alt="Company logo"></a>
        <div class="wrap">
            <h1>Register</h1>
            <p>Get started by creating an account</p>
        <?php
            // Handle input error messages e.g. incorrect password, none existing accounts.
            // 1st arg: session variable
            // 2nd arg: html tag
            // 3rd arg: css selector
            session_render_var("error", "p", "error");
        ?>
        </div>
        <form action="server/register.php" method="post"> 
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Register">
        </form>
        <p>Already have an account? <a href="user_login.php">Login</a></p>
    </main>
    <script src="../js/form_input_persist.js"></script>
</body>
</html>
