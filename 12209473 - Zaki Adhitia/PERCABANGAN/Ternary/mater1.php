<?php 

//OPERATOR TERNARY = BERFUNGSI UNTUNG MEMPERSINGKAT TEXT KONDISI PERCABANGAN IF ELSE

// $a = 10;
// $b = 15;

// $hasil = $a < $b ? "Ya Benar" : "Anda salah";
// echo $hasil;

// $a = 0;
// $bilangan = $a < 0 ? "negative" : ($a > 0 ? "positif" : "cacah");
// echo $bilangan;

$harga_awal = 120000;
$voucher = 10000;

$bayar = $harga_awal > 100000 ? ($harga_awal - $voucher) : $harga_awal;
echo "Bayar seharga" . $bayar;
?>