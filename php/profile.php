<?php
session_start(); // Ensure session is started

// Check if user is logged in
if (isset($_SESSION['user_id'])) {
    include '../includes/config.php'; // Include your database connection
    
    $user_id = $_SESSION['user_id'];
    $query = "SELECT username FROM users WHERE id = ?";
    
    if ($stmt = $conn->prepare($query)) {
        $stmt->bind_param("i", $user_id);
        
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            if ($user = $result->fetch_assoc()) {
                echo "Username: " . htmlspecialchars($user['username']) . "<br>";
            } else {
                echo "User not found.";
            }
        } else {
            echo "Error: " . $stmt->error;
        }
        
        $stmt->close();
    } else {
        echo "Error: " . $conn->error;
    }
    
    $conn->close();
} else {
    echo "User not logged in.";
}
?>
