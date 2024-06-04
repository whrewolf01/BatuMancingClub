<?php
include 'koneksi.php';

if (isset($_POST['login'])) {
    $id_pengguna = $_POST['username'];

    $sql = "SELECT * FROM tb_login WHERE username = ?";
    $stmt = $koneksi->prepare($sql);
    $stmt->bind_param("s", $id_pengguna);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        session_start();
        $_SESSION['username'] = $id_pengguna;
        header('Location: admin.php');
        exit();
    } else {
        echo "
        <script>
            alert('ID Pengguna salah, Silakan coba lagi');
            window.location = 'login.php';
        </script>
        ";
    }
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Batu Mancing Club</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <img src="logoBMC.png" alt="logo" width="200">
        <h1>Batu Mancing Club</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="register.php">Register</a></li>
                <li><a href="info.php">Info</a></li>
            </ul>
        </nav>
    </header>

    <section id="login">
        <h2>Login ke Akun Anda</h2>
        <form action="#" method="post">
            <label for="username">Masukkan ID Pengguna</label><br>
            <input type="text" id="username" name="username" required><br><br>
            <label for="password">Masukkan Password Pengguna </label><br>
            <input type="password" id="password" name="password" required><br><br>
            <p><button type="submit" name="login" class="btn">Masuk</button></p>
        </form>
        <p>Tidak punya akun? <a href="register.php">Buat Akun</a></p>
    </section>

    <footer>
        <p>© 2024 Batu Mancing Club. All Rights Reserved.</p>
    </footer>
</body>
</html>
