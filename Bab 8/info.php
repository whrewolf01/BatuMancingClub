<!DOCTYPE html>
<html>
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
                <li><a href="dashboard-info.php" id="infoLink">Info</a></li>
            </ul>
        </nav>
    </header>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Lokasi dan Ikan</title>
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

<h2>Data Lokasi dan Ikan</h2>
<div class="btn-container">
    <button onclick="window.location.href='info-input.php'">Input Data</button>
    <button onclick="window.location.href='cetak-info.php'">Cetak Data</button>
</div>
<table border="1">
    <tr>
        <th>No</th>
        <th>Gambar</th>
        <th>Lokasi</th>
        <th>Nama Ikan</th>
        <th>Aksi</th>
    </tr>

<?php
include 'koneksi.php';

$sql = "SELECT * FROM tb_info";
$result = $koneksi->query($sql);

if ($result->num_rows > 0) {
  $i=1;
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $i. "</td>
                <td>
                <img src='foto/$row[photo]' width='200px'>
                </td>
                <td>" . $row["lokasi"]. "</td>
                <td>" . $row["ikan"]. "</td>
                <td class='actions'>
                    <form method='GET' action='edit-info.php'>
                        <input type='hidden' name='id' value='" . $row["id_info"] . "'>
                        <input type='submit' value='Edit'>
                    </form>
                    <form method='GET' action='delete-info.php'>
                        <input type='hidden' name='id' value='" . $row["id_info"] . "'>
                        <input type='submit' value='Hapus'>
                    </form>
                </td>
            </tr>";
            $i++;
    }
} else {
    echo "<tr><td colspan='4'>0 results</td></tr>";
}
$koneksi->close();
?>
</table>

</body>
</html>