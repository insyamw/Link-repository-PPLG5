<?php 
$harga_awal = 154000;
$diskon = 7;

if ($harga_awal >= 100000) {
    $diskon = $harga_awal * ($diskon / 100);
    $harga_akhir = $harga_awal - $diskon;
}else{
    $harga_akhir = $harga_awal;
}

echo "Andi harus membayar seharga" . $harga_akhir;
?>