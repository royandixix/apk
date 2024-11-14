<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi-Rekomendasi</title>
    <link rel="stylesheet" href="public/css1/style.css">
    <link rel="stylesheet" href="publiccss1/style4.css">
    <link rel="stylesheet" href="../public/css1/style.css">
    <link rel="stylesheet" href="../public/css1/style4.css">

</head>

<body>
    <div class="container">
        <img src="../public/images/icon-1.png" alt="not found" class="icon">
    </div>

    <div class="auth-buttons">
        <a href="login.php">Masuk</a>
    </div>

    <div class="header">
        <h1>Rekomendasi Jurnal atau Buku</h1>
    </div>
    <img src="../public/images/icon.png" alt="not found" class="responsive-image">
    <div class="search-container">
        <input type="text" class="search-bar" placeholder="Masukkan sebuah kata kunci">
        <button class="search-button">Cari</button>
    </div>
</body>

<body>
    <!-- Tombol Burger Menu -->
    <div id="menu-btn" class="menu-btn" onclick="toggleSidebar()">
        &#9776;
    </div>

    <!-- Sidebar -->
    <div id="sidebar" class="sidebar">
        <div class="close-btn" onclick="toggleSidebar()">×</div>
        <a href="beranda">Beranda</a>
        <a href="profil">Profile</a>
        <a href="#">Settings</a>
        <a href="#">Logout</a>
    </div>
    <script src="../public/js/script.js"></script>
</body>

</html>