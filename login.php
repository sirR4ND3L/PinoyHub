<?php
session_start();
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

$username = $conn->real_escape_string($_POST['username']);
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();
    if (password_verify($password, $user['password'])) {
        $_SESSION['username'] = $username;
        header("Location: main.php");
        exit();
    } else {
        echo "<script>
        alert('Invalid password.');
        window.location = 'login.html';
        </script>";
        exit();
    }
} else {
    echo "<script>
    alert('User not found.');
    window.location = 'login.html';
    </script>";
    exit();
}

$conn->close();
?>
