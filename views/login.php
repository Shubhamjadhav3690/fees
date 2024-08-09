<?php include '../includes/header.php'; ?>

<form action="../php/login.php" method="POST">
    <h2>Login</h2>
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
</form>

<?php include '../includes/footer.php'; ?>
