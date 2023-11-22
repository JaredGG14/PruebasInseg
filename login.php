<?php
//error_reporting(0);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "practice4";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user = $_POST['username'];
$pass = $_POST['password'];

$sql = "SELECT * FROM users WHERE username = '$user' AND password = '$pass'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "Login succesful!";
} else {
    echo "Wrong ser or password.";
}
$conn->close();

/*
$stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
$stmt->bind_param("ss", $user, $pass);
$stmt->execute();

$stmt->store_result();

if ($stmt->num_rows > 0) {
    echo "Login successful!";
} else {
    echo "Wrong user or password.";
}
// Cerrar la sentencia y la conexión
$stmt->close();
*/

?>
