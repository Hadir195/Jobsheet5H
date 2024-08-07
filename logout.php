<?php
session_start(); // Memulai sesi

// Menghapus semua data sesi
session_unset();

// Menghancurkan sesi
session_destroy();

// Mengarahkan pengguna kembali ke halaman login
header("Location: login.php");
exit();
?><?php
session_start(); // Memulai sesi

// Menghapus semua data sesi
session_unset();

// Menghancurkan sesi
session_destroy();

// Mengarahkan pengguna kembali ke halaman login
header("Location: login.php");
exit();
?>