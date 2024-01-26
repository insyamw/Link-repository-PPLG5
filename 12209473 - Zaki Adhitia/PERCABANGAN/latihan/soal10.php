<?php 

$belanja = 160000;
$voucher = 10000;
$bonus = "1 kardus permen kaki";

if ($belanja > 100000 && $belanja < 150000) {
   $harga_akhir = $belanja - $voucher;
   echo "Total belanja " . "<b>$harga_akhir</b>";
}elseif($belanja >= 150000 ){
    $harga_akhir = $belanja - $voucher;
    echo "Total belanja Rp : " . "<b>$harga_akhir</b>" . " dan bonus pembelian"  ." <b>$bonus</b>";
}else{
    $harga_akhir = $belanja;
}

?>