<?php
//error_reporting(0);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "practice4";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conection failed: " . $conn->connect_error);
}

$user = $_POST['username'];
$pass = $_POST['password'];

//Inseguro
$sql = "SELECT * FROM users WHERE username = '$user' AND password = '$pass'";
//Seguro
//$sql = "SELECT * FROM users WHERE username = ? AND password = ?";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "¡Login succesful!";
} else {
    echo "User or password wrong.";
}

$conn->close();
?>
