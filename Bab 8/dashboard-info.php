<?php
// Pastikan Anda memiliki koneksi yang benar ke database
require_once 'datainfo-proses.php';

// Mengambil jumlah data dari tb_login dan tb_info
$loginCount = getLoginCount($koneksi);
$infoCount = getInfoCount($koneksi);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Batu Mancing Club</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <img src="logoBMC.png" alt="logo" width="200" />
        <h1 id="clubName">Batu Mancing Club</h1>
        <nav>
            <ul type="square" id="navigation">
                <li><a href="#" id="homeLink">Home</a></li>
                <li><a href="login.php" id="signUpLink">Sign Up</a></li>
                <li><a href="register.php" id="registerLink">Register</a></li>
                <li><a href="info.php" id="infoLink">Info</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <h1 class="mt-5">Dashboard Info</h1>
        <div class="home-content">
            <h1>Welcome Back Admin</h1>

            <div class="widgets" style="display: flex; gap: 20px;">
                <!-- Widget untuk jumlah data dari tb_login -->
                <div class="widget" style="flex: 1; min-width: 200px; height: 150px; border: 2px solid #000; padding: 20px; border-radius: 10px;">
                    <div class="widget-content" style="display: flex; flex-direction: column; justify-content: center; height: 100%;">
                        <div class="widget-text">
                            <span class="widget-title" style="font-size: 20px;">Jumlah Pengguna: <?php echo htmlspecialchars($loginCount); ?></span>
                        </div>
                    </div>
                </div>
                
                <!-- Widget untuk jumlah data dari tb_info -->
                <div class="widget" style="flex: 1; min-width: 200px; height: 150px; border: 2px solid #000; padding: 20px; border-radius: 10px;">
                    <div class="widget-content" style="display: flex; flex-direction: column; justify-content: center; height: 100%;">
                        <div class="widget-text">
                            <span class="widget-title" style="font-size: 20px;">Jumlah Info: <?php echo htmlspecialchars($infoCount); ?></span>
                        </div>
                    </div>
                </div>
            </div>
         </div>
    </div>
</body>
</html>
