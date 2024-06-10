<?php
include 'koneksi.php';
function upload() {
    $namaFile = $_FILES['photo']['name'];
    $error = $_FILES['photo']['error'];
    $tmpName = $_FILES['photo']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload
    if($error === 4) {
        echo "
            <script>
                alert('Gambar Harus Diisi');
                window.location = 'info-input.php';
            </script>
        ";

        return false;
    }

    // cek apakah yang diupload adalah gambar
    $ekstentiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if(!in_array($ekstensiGambar, $ekstentiGambarValid)) {
        echo "
            <script>
                alert('File Harus Berupa Gambar');
                window.location = 'info-input.php';
            </script>
        ";

        return null;
    }

    // lolos pengecekan, upload gambar
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    $oke =  move_uploaded_file($tmpName, 'foto/' . $namaFileBaru);
    return $namaFileBaru;

}

if (isset($_POST['simpan'])) {
    $lokasi = $_POST['lokasi'];
    $ikan = $_POST['ikan'];
    $photo = upload();

    $sql = "INSERT INTO tb_info VALUES(null, '$lokasi','$ikan','$photo')";

    if (empty($lokasi) || empty($ikan)|| empty($photo)){
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
