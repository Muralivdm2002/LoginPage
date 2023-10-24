<?php

$name = $_POST["name"];
$phone = $_POST["phoneNumber"];
$mailId = $_POST["mail"];
$passWord = $_POST["password"];
$address = $_POST["address"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userdata";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "CREATE DATABASE IF NOT EXISTS $dbname;";

$result = mysqli_query($conn, $sql);

if (!$result) {
    die("database creation failed: " . mysqli_error($conn));
}

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "CREATE TABLE IF NOT EXISTS user_table(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    phone INT(10) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(30) NOT NULL,
    address VARCHAR(255) NOT NULL
);";

$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Table creation failed: " . mysqli_error($conn));
}

$existence = false;

$sql = "SELECT * FROM user_table
        WHERE email = '$mailId';";

$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result)>0){
    $existence = true;
}

$sql = "INSERT INTO `user_table`(name, phone, email, password, address)
        VALUES('$name', '$phone', '$mailId', '$passWord', '$address');";

$result = mysqli_query($conn, $sql);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Successfull</title>
    <link rel="stylesheet" href="style1.css">
</head>

<body>
    <div class="successMessage">
        <img src="./images/correct.png" class="tick"><br>
        <?php
            if($existence){
                echo "<div>You Already Have an Account.You Can't Create Another Account</div>";
            } else {
                echo "<div>You Have Successfully Created An Account</div>";
            }
        ?>
        <a href="login.php">
            <button>Go to login page</button>
        </a>
    </div>
</body>

</html>