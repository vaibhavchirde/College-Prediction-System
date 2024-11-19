<?php
$conn = new mysqli('localhost', 'root', '', 'CollegePrediction');

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Example logic: fetch top colleges for the user
$sql = "SELECT * FROM Colleges ORDER BY nirf_rank LIMIT 5";
$result = $conn->query($sql);

$colleges = [];
while ($row = $result->fetch_assoc()) {
    $colleges[] = $row;
}
echo json_encode($colleges);

$conn->close();
?>
