<?php 


$jam_kerja = 8;
$jam_lembur = 6;
$kompen = 30000;

if ($jam_kerja + $jam_lembur >  $jam_kerja ){
    $jam_kerja = $jam_kerja + $jam_lembur - 8;
    $total_gaji = $jam_kerja * $kompen;
}else{
    echo "Tidak Lembur";
}

echo "Total gaji kompensasi adalah" . " " .$total_gaji;

?>