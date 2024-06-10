<?php
include('koneksi.php');
require_once('dompdf/dompdf/autoload.inc.php');

use Dompdf\Dompdf;

$dompdf = new Dompdf();
$sql = "SELECT * FROM tb_info";
$result = $koneksi->query($sql);

$html = '<center><h3>Data Info</h3></center><hr/><br>';
$html .= '<table border="1" width="100%">
            <tr>
                <th>No</th>
                <th>Lokasi</th>
                <th>Nama</th>
            </tr>';
$no = 1; // Inisialisasi nomor urut
while ($row = $result->fetch_assoc()) {
     $html .= "<tr>
                <td>" . $no . "</td>
                <td>" . $row["lokasi"] . "</td>
                <td>" . $row["ikan"] . "</td>
              </tr>";
    $no++; // Increment nomor urut
}
$html .= "</table>";

$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait'); // Perbaikan pada orientasi kertas ('portrait')
$dompdf->render();
$dompdf->stream('data-info.pdf');
?>
