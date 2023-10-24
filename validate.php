<?php
$email = $_POST["mail"];
$passWord = $_POST["password"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userdata";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection Failed" . mysqli_connect_error());
}

$sql = "SELECT * FROM user_table
            WHERE email = '$email'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        if ($row["password"] == $passWord) {
            header("Location: Home.php");
        } else {
            header("Location: Failure.php");
        }
    }
} else {
    header("Location: Failure.php");
}
