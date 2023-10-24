<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="login">
        <form class="loginForm" style="border-bottom: none;" action="success.php" method="post" autocomplete="off">
            <h1>Register</h1>
            <div>
                <label for="name">Name</label><br>
                <input type="text" id="name" Name="name" Placeholder="Enter Your Name" required><br>
            </div>
            <div>
                <label for="phoneNumber">Phone Number</label><br>
                <input type="tel" id="phoneNumber" name="phoneNumber" placeholder="Enter Your Phone Number" required><br>
            </div>
            <div>
                <label for="mail">E-mail</label><br>
                <input type="email" id="mail" name="mail" placeholder="Enter Your Email Id" required><br>
            </div>
            <div>
                <label for="password">Password</label><br>
                <input type="password" id="password" name="password" placeholder="Enter A Strong Password" required><br>
            </div>
            <div>
                <label for="address">Address</label><br>
                <input type="text" id="address" name="address" placeholder="Enter Your Address" required><br>
            </div>
            <div class="submit"><input type="submit" name="submit" value="Register"></div>
        </form>
    </div>

    <script>

    </script>
</body>

</html>