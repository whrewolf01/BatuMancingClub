<?php
session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

include 'koneksi.php';

// Ambil daftar pengguna dari database
$sql = "SELECT id_pengguna,username,  FROM ";
$result = $koneksi->query($sql);

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Batu Mancing Club</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }
        .container {
            width: 80%;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }
        h2 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        .logout-btn {
            display: block;
            width: 100px;
            margin: 20px auto;
            padding: 10px;
            text-align: center;
            background-color: #dc3545;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .logout-btn:hover {
            background-color: #c82333;
        }
    </style>
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
                <li><a href="admin.php">Dashboard</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <h2>Admin Dashboard</h2>
        <table>
            <tr>
                <th>ID Pengguna</th>
                <th>Nama</th>
                <th>No HP</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["id_pengguna"] . "</td><td>" . $row["nama"] . "</td><td>" . $row["noHP"] . "</td></tr>";
                }
            } else {
                echo "<tr><td colspan='3'>Tidak ada pengguna terdaftar</td></tr>";
            }
            ?>
        </table>
        <a href="logout.php" class="logout-btn">Logout</a>
    </div>

    <footer>
        <p>© 2024 Batu Mancing Club. All Rights Reserved.</p>
    </footer>
</body>
</html>
<?php
$koneksi->close();
?>
