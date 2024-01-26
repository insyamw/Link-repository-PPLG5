<?php 

$nasi_goreng = 15000; 
$ayam_bakar = 20000; 
$nasi_kebuli = 25000; 
$aneka_jus = 8000;
$esteh_manis = 3000;
$es_jeruk = 5000;
$day = date("l");
$senin = 2;
$jumat = 5;

$harga_keseluruhan =  $ayam_bakar + ($nasi_goreng * 2) + ($nasi_kebuli * 2);
if ($day == "Monday") {
   $senin = $harga_keseluruhan * ($senin / 100); 
   $harga_akhir = $harga_keseluruhan - $senin;
   echo "Terdapat potongan harga! <br> Harga total menjadi = " . $harga_akhir;
}elseif($day == "Friday"){
    $jumat = $harga_keseluruhan * ($jumat / 100); 
    $harga_akhir = $harga_keseluruhan - $jumat;
    echo "Terdapat potongan harga! <br> Harga total menjadi " . "Rp " . $harga_akhir;
}else{
    echo "Pada hari ini tidak ada potongan harga! <br> Total Rp " . $harga_keseluruhan;
}
?>