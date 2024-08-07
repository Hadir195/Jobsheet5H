<?php
session_start();

// Cek jika pengguna sudah login
if (isset($_SESSION['username'])) {
    header("Location: home.php");
    exit();
}

$loginError = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validasi username dan password (misalnya menggunakan username:admin dan password:password)
    if ($username === 'admin' && $password === 'password') {
        $_SESSION['username'] = $username;
        header("Location: home.php");
        exit();
    } else {
        $loginError = 'Username atau password salah.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <?php if ($loginError): ?>
            <p class="error"><?= $loginError ?></p>
        <?php endif; ?>
        <form action="login.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>


