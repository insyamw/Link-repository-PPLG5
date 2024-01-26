<?php 


$kehadiran = 100;
$status = "alpha";

$status_kehadiran = $status == "izin" || $status == "sakit" ? $kehadiran - 3 : ($status == "alpha" ? $kehadiran - 5 : $kehadiran);
echo "Kehadiran Siswa Adalah : " . $status_kehadiran . "%";

// $kehadiran = 100;
// $izinsakit = 0;
// $alpha = 1;

// $status_kehadiran = $izinsakit ? $kehadiran - 3 : ($status_kehadiran = $alpha ? 100 - 5 : $kehadiran);
// echo "Kehadiran siswa : " . $status_kehadiran . "%";

?>