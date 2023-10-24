<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="login">
        <form class="loginForm" action="validate.php" method="post">
            <h1>Login</h1>
            <div>
                <label for="mail">E-mail</label><br>
                <input type="email" id="mail" name="mail" placeholder="Enter Your Email Id" required><br>
            </div>
            <div>
                <label for="password">Password</label><br>
                <input type="password" id="password" name="password" placeholder="Enter Your Password" required>
            </div>
            <div class="submit"><input type="submit" value="Login"></div>
        </form>
        <div class="submit" style="margin-top: 30px;"><a href="index.php"><input type="button" value="Create An Account"></a></div>
    </div>
</body>

</html>