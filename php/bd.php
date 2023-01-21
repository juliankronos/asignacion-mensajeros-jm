<?php
$servername = "localhost";
$database = "domina";
$username = "root";
$password = "46682156";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>