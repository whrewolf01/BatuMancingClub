<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Data Lokasi dan Ikan</title>
    <link rel="stylesheet" type="text/css" href="info.css">
</head>
<body>

<h2>Input Data Lokasi dan Ikan</h2>

<form method="POST" action="info-proses.php" enctype="multipart/form-data">
    <label for="lokasi">Lokasi:</label>
    <input type="text" id="lokasi" name="lokasi" required>
    <br><br>
    <label for="ikan">Nama Ikan:</label>
    <input type="text" id="ikan" name="ikan" required>
    <br><br>
    <label for="Photo">Foto Ikan:</label>
    <input type="file" id="photo" name="photo" required>
    <br><br>
    <input type="submit" name="simpan" value="Simpan">
</form>
</body>
</html>
