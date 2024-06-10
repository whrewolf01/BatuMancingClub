<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM tb_info WHERE id_info=$id";

    if ($koneksi->query($sql) === TRUE) {
        echo "
        <script>
            alert('Data Berhasil Di Hapus');
            window.location = 'info.php';
        </script>
    ";
    } else {
        echo "
        <script>
            alert('Error Data Tidak Tersedia');
            window.location = 'info.php';
        </script>
    ";
    }
} else {
    echo "ID tidak ditemukan";
}

$koneksi->close();
?>
