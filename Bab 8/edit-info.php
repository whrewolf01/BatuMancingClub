<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Ikan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h2 {
            color: #333;
        }

        form {
            margin-bottom: 20px;
        }

        label {
            display: inline-block;
            width: 100px;
        }

        input[type="text"] {
            width: 200px;
        }

        input[type="submit"] {
            margin-top: 10px;
        }
    </style>
</head>
<body>

<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $lokasi = $_POST['lokasi'];
    $nama = $_POST['nama'];
    $photo = $_POST['photo'];

    $sql = "UPDATE tb_info SET lokasi='$lokasi', ikan='$nama', photo='$photo' WHERE id_info=$id";

    if ($koneksi->query($sql) === TRUE) {
        echo "
        <script>
            alert('Data Berhasil Di Update');
            window.location = 'info.php';
        </script>
    ";
    } else {
        echo "
        <script>
            alert('Error');
            window.location = 'info.php';
        </script>
    ";
    }
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM tb_info WHERE id_info=$id";
    $result = $koneksi->query($sql);
    $row = $result->fetch_assoc();

    if ($row) {
        ?>
        <h2>Edit Data Lokasi dan Ikan</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <input type="hidden" name="id" value="<?php echo $row['id_info']; ?>">
            <label for="lokasi">Lokasi:</label>
            <input type="text" id="lokasi" name="lokasi" value="<?php echo $row['lokasi']; ?>" required>
            <br><br>
            <label for="nama">Nama Ikan:</label>
            <input type="text" id="nama" name="nama" value="<?php echo $row['ikan']; ?>" required>
            <br><br>
            <label for="photo">Foto Ikan:</label>
            <input type="file" id="photo" name="photo" value="<?php echo $row['photo']; ?>" required>
            <br><br>
            <input type="submit" value="Update">
        </form>
        <?php
    } else {
        echo "Data tidak ditemukan";
    }
} else {
    echo "ID tidak ditemukan";
}

$koneksi->close();
?>

</body>
</html>
