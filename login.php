<?php
include 'koneksi.php'; // Menyertakan file koneksi database

// Proses login
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login_email']) && isset($_POST['login_password'])) {
  // Ambil data dari form login
  $email = $_POST['login_email'];
  $password = $_POST['login_password'];

  // Lakukan validasi login
  if (loginUser($email, $password)) {
    echo "<script>alert('Login berhasil!');</script>";
    // Redirection setelah login berhasil
    echo "<script>window.location.href = 'Beranda.php';</script>";
  } else {
    echo "<script>alert('Login gagal!');</script>";
  }
}

// Proses registrasi
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register_email']) && isset($_POST['register_password']) && isset($_POST['register_username'])) {
  // Ambil data dari form registrasi
  $username = $_POST['register_username'];
  $registerEmail = $_POST['register_email'];
  $registerPassword = $_POST['register_password'];

  // Lakukan penyimpanan data ke database
  if (registerUser($username, $registerEmail, $registerPassword)) {
    echo "<script>alert('Registrasi berhasil!');</script>";
    // Redirection setelah registrasi berhasil
    echo "<script>window.location.href = 'login.php';</script>";
  } else {
    echo "<script>alert('Registrasi gagal!');</script>";
  }
}
?>

<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Pengguna</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      background: linear-gradient(to right, #6a11cb, #2575fc);
    }
    .login-container {
      max-width: 400px;
      padding: 2rem;
      border-radius: 15px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
      background-color: #fff;
    }
    .login-title {
      font-size: 2rem;
      margin-bottom: 1.5rem;
      color: #333;
      text-align: center;
    }
    .form-label {
      color: #555;
    }
    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
      transition: background-color 0.3s, border-color 0.3s;
    }
    .btn-primary:hover {
      background-color: #0056b3;
      border-color: #004085;
    }
    .forgot-password,
    .register-link {
      font-size: 0.9rem;
      color: #007bff;
    }
    .forgot-password:hover,
    .register-link:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body>
  <div class="login-container">
    <h2 class="login-title">Login Pengguna</h2>
    <form method="POST" action="">
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="login_email" class="form-control" id="email" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Kata Sandi</label>
        <input type="password" name="login_password" class="form-control" id="password" required>
      </div>
      <div class="d-grid mb-2">
        <button type="submit" class="btn btn-primary">Login</button>
      </div>
      <div class="text-center">
        <a href="#" class="register-link" data-bs-toggle="modal" data-bs-target="#registerModal">Daftar</a>
      </div>
    </form>
  </div>

  <!-- Modal untuk Registrasi -->
  <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="registerModalLabel">Registrasi Pengguna</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
        </div>
        <div class="modal-body">
          <form method="POST" action="">
            <div class="mb-3">
              <label for="registerName" class="form-label">Nama Lengkap</label>
              <input type="text" name="register_username" class="form-control" id="registerName" placeholder="Nama lengkap Anda" required>
            </div>
            <div class="mb-3">
              <label for="registerEmail" class="form-label">Alamat Email</label>
              <input type="email" name="register_email" class="form-control" id="registerEmail" placeholder="Email Anda" required>
            </div>
            <div class="mb-3">
              <label for="registerPassword" class="form-label">Kata Sandi</label>
              <input type="password" name="register_password" class="form-control" id="registerPassword" placeholder="Buat kata sandi" required>
            </div>
            <div class="d-grid">
              <button type="submit" class="btn btn-primary">Daftar</button>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
