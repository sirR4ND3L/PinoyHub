<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = "localhost";
$user = "root";
$pass = "mySQL";
$dbname = "pinoyhub";

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data
$username = $conn->real_escape_string($_POST['username']);
$email = $conn->real_escape_string($_POST['email']);
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Insert
$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
if ($conn->query($sql) === TRUE) {
    header ("Location: login.html");
    exit();
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
