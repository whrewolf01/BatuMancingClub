<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Batu Mancing Club</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <img src="logoBMC.png" alt="logo" width="200">
        <h1>Batu Mancing Club</h1>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="register.php">Register</a></li>
                <li><a href="info.html">Info</a></li>
            </ul>
        </nav>
    </header>

    <section id="register">
        <h2>Daftar Akun Baru</h2>
        <form action="register-proses.php" method="post">
            <label for="username">Username</label><br>
            <input type="text" id="username" name="username" value="<?php echo $username; ?>"><br>

            <label for="email">Email</label><br>
            <input type="text" id="email" name="email" value="<?php echo $email; ?>"><br>

            <label for="password">Password</label><br>
            <input type="password" id="password" name="password" value="<?php echo $noHP; ?>"><br>

            <p><button type="submit" name="register" class="btn">Daftar</button></p>
        </form>
    </section>

    <footer>
        <p>© 2024 Batu Mancing Club. All Rights Reserved.</p>
    </footer>
</body>
</html>
