document.addEventListener('DOMContentLoaded', function() {
    // Tampilkan pop-up saat halaman login diakses
    showAlert();
});

// Function untuk menampilkan pop-up
function showAlert() {
    alert('Selamat datang! Silakan login untuk mengakses akun Anda.');
}

// Validasi formulir login (dummy untuk contoh)
document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Untuk mencegah pengiriman formulir (dummy)
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    // Di sini bisa ditambahkan logika validasi sesuai kebutuhan
    alert(`Anda mencoba login dengan username: ${username} dan password: ${password}`);
});
