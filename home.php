<?php

session_start();

// Cek jika pengguna belum login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<a href="logout.php">Logout</a>

    <div class="home-container">
        <h2>Welcome, <?= htmlspecialchars($username) ?>!</h2>
        <p>Ini adalah halaman utama sistem. Anda berhasil login.</p>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>