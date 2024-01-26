<?php 

$tabungan = 850000;
$bunga = 5;

$hasil = $tabungan > 500000 ? ($tabungan * ($bunga / 100)) : $tabungan;
echo $hasil;


?>