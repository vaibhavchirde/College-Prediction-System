<?php
$conn = new mysqli('localhost', 'root', '', 'CollegePrediction');

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT password FROM Users WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        echo 'Login successful';
    } else {
        echo 'Invalid password';
    }
} else {
    echo 'User not found';
}
$conn->close();
?>
