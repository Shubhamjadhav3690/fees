<?php
session_start(); // Start session

// Destroy the session and redirect to login page
session_unset();
session_destroy();
header("Location: ../views/login.php");
exit();
?>
