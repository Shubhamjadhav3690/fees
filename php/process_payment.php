<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cardNumber = $_POST['cardNumber'];
    $cardExpiry = $_POST['cardExpiry'];
    $cardCVC = $_POST['cardCVC'];
    $cardHolderName = $_POST['cardHolderName'];

    // Process payment logic here

    echo "Payment successful! Thank you, " . htmlspecialchars($cardHolderName);
}
?>
