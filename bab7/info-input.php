<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info - Batu Mancing Club</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <img src="logoBMC.png" alt="logo" width="200">
        <h1>Batu Mancing Club</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.html">Register</a></li>
            </ul>
        </nav>
    </header>
<h2>Input Data Lokasi dan Ikan</h2>

<form method="POST" action="info-proses.php">
    <label for="lokasi">Lokasi:</label>
    <input type="text" id="lokasi" name="lokasi" required>
    <br><br>
    <label for="ikan">Nama Ikan:</label>
    <input type="text" id="ikan" name="ikan" required>
    <br><br>
    <input type="submit" name="simpan" value="Simpan">
</form>
</body>
</html>
