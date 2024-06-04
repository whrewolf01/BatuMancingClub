<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $lokasi = $_POST['lokasi'];
    $ikan = $_POST['ikan'];
   

    $sql = "INSERT INTO tb_info VALUES(null, '$lokasi','$ikan')";

    if (empty($lokasi) || empty($ikan)){
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = 'info.php';
            </script>
        ";
    } elseif (mysqli_query($koneksi, $sql)) {
        echo "  
            <script>
                alert('Data Berhasil Ditambahkan');
                window.location = 'info.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'info.php';
            </script>
        ";
    }
} else {
    header('location: info.php');
}
