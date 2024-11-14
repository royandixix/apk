function toggleSidebar() {
    const sidebar = document.getElementById("sidebar");
    const menuBtn = document.getElementById("menu-btn");
    
    // Menampilkan atau menyembunyikan sidebar
    sidebar.classList.toggle("active");
    
    // Menyembunyikan tombol burger saat sidebar terbuka, menampilkannya saat tertutup
    menuBtn.classList.toggle("hidden");
}
