<?php 

$nilai = 11;

if ($nilai > 0) {
    echo "Positif";
    if ($nilai > 10) {
        echo "Lebih besar dari 10";
    }
}elseif($nilai == 0){
    echo "Bilangan cacah";
}
else {
    echo "Negatif";
}


?>

