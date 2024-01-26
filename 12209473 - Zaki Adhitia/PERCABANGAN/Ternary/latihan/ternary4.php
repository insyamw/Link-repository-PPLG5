<?php 

$nilai = 83;

$hasil = $nilai >= 90 ? "Predikat A" 
: ($nilai >= 75 && $nilai < 90 ? "predikat B" : "predikat C");
echo $hasil;

?>