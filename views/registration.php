<?php include '../includes/header.php'; ?>

<form action="../php/register.php" method="POST">
    <h2>Register</h2>
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>

    <input type="text" name="phone" placeholder="Phone" id="phone" required>
    

    <button type="submit">Register</button>
</form>

<?php include '../includes/footer.php'; ?>
