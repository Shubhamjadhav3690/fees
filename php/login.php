<?php
include 'config.php'; // Include the database connection file

session_start(); // Start session to handle login state

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password']; // Plain text password

    $stmt = $conn->prepare("SELECT password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($storedPassword);
    $stmt->fetch();

    // Verify plain text password
    if ($password === $storedPassword) {
        $_SESSION['username'] = $username; // Store username in session
        header("Location: ../views/fees_calculator.php"); // Redirect to fees calculator page
        exit();
    } else {
        echo "Invalid username or password.";
    }
    $stmt->close();
}
?>
