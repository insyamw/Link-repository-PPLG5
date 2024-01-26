<?php 

$berat = 44;
$tinggi = 148;

$imt = $berat / (($tinggi/100) ** 2);
if ($imt <= 18.5) {
    echo "Berat Bdan Kurang";
}elseif($imt >= 18.6 && $imt <= 22.9){
    echo "Imt Badan Normal";
}elseif($imt >= 23 && $imt <= 24.9){
    echo "Imt Badan Lebih";
}else {
    echo "Obesitas";
} 


?>