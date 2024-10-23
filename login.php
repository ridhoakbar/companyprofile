<?php
session_start();

// Username dan password yang di-hardcode
$valid_username = "admin";
$valid_password = "12345";

// Cek apakah form sudah di-submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validasi login
    if ($username == $valid_username && $password == $valid_password) {
        // Login berhasil, buat session
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;

        // Redirect ke halaman setelah login
        header("Location: dashboard.php");
        exit();
    } else {
        // Jika username/password salah
        echo "Invalid username or password!";
    }
}
?>
