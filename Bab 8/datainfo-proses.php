<?php
include 'koneksi.php';

function getInfoData($koneksi) {
    $sql = "SELECT * FROM tb_info";
    $result = $koneksi->query($sql);

    $infoData = [];
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $infoData[] = $row;
        }
    }
    return $infoData;
}
function getLoginCount($koneksi) {
    $query = "SELECT COUNT(*) as count FROM tb_login";
    $result = $koneksi->query($query);
    $data = $result->fetch_assoc();
    return $data['count'];
}

// Fungsi untuk mendapatkan jumlah data dari tb_info
function getInfoCount($koneksi) {
    $query = "SELECT COUNT(*) as count FROM tb_info";
    $result = $koneksi->query($query);
    $data = $result->fetch_assoc();
    return $data['count'];
}

?>
