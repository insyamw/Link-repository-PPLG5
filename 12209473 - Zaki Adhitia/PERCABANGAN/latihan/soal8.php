<?php 

$panjang = 13;
$lebar = 9;

$tanah = $panjang * $lebar;
if ($tanah < 90) {
    echo "Tipe 36";
}elseif($tanah > 90 && $tanah <= 96){
    echo "Tipe 45";
}elseif($tanah > 96 &&   $tanah <= 120){
    echo "Type 54";
}elseif($tanah > 120 && $tanah <= 150){
    echo "Type 60";
}elseif($tanah > 150){
    echo "Type 70";
}
?>