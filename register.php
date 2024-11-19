<?php
$conn = new mysqli('localhost', 'root', '', 'CollegePrediction');

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

$name = $_POST['name'];
$caste = $_POST['caste'];
$jee_score = $_POST['jee_score'];
$percentage = $_POST['percentage'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);

$sql = "INSERT INTO Users (name, caste, jee_score, percentage, email, password) VALUES ('$name', '$caste', $jee_score, $percentage, '$email', '$password')";
if ($conn->query($sql) === TRUE) {
    echo 'Registration successful';
} else {
    echo 'Error: ' . $conn->error;
}
$conn->close();
?>
