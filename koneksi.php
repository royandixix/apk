<?php
$host = 'localhost'; // Ganti jika menggunakan host yang berbeda
$db = 'aplikasi_rekomendasi_222287'; // Ganti dengan nama database Anda
$user = 'root'; // Ganti dengan username database Anda
$pass = ''; // Ganti dengan password database Anda

// Membuat koneksi
$mysqli = new mysqli($host, $user, $pass, $db);

// Memeriksa koneksi
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

function registerUser($username, $email, $password) {
    global $mysqli;

    // Hash password sebelum disimpan
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Sanitasi input untuk mencegah SQL Injection
    $username = $mysqli->real_escape_string($username);
    $email = $mysqli->real_escape_string($email);
    $hashedPassword = $mysqli->real_escape_string($hashedPassword);

    // Query untuk memasukkan data pengguna
    $query = "INSERT INTO 222287_user (222287_username, 222287_email, 222287_password) VALUES ('$username', '$email', '$hashedPassword')";

    // Eksekusi query
    if ($mysqli->query($query) === TRUE) {
        return true; // Registrasi berhasil
    } else {
        return false; // Gagal
    }
}

function loginUser($email, $password) {
    global $mysqli;

    // Sanitasi input untuk mencegah SQL Injection
    $email = $mysqli->real_escape_string($email);

    // Query untuk mendapatkan hashed password dari database
    $query = "SELECT 222287_password FROM 222287_user WHERE 222287_email = '$email'";
    $result = $mysqli->query($query);

    if ($result) {
        // Cek jika ada hasil
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $hashedPassword = $row['222287_password'];

            // Verifikasi password
            if (password_verify($password, $hashedPassword)) {
                return true; // Login berhasil
            }
        }
    }
    return false; // Login gagal
}
?>
