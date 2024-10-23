<?php
session_start();

// Cek apakah user sudah login
if (!isset($_SESSION['loggedin'])) {
    // Jika belum login, redirect ke halaman login
    header("Location: index.php");
    exit();
}

// Tampilkan pesan selamat datang
echo "Welcome to the dashboard, " . $_SESSION['username'];
?>