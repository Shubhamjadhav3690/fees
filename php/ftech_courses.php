<?php
include 'config.php';

header('Content-Type: application/json'); // Set response type to JSON

$courses = [];

$result = $conn->query("SELECT id, course_name FROM courses");
if (!$result) {
    echo json_encode(['error' => 'Query failed: ' . $conn->error]);
    exit();
}
while ($row = $result->fetch_assoc()) {
    $courses[] = $row;
}

echo json_encode($courses); // Send courses data as JSON
?>
