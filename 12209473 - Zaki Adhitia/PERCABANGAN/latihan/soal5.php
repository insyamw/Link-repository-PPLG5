<?php 

$andi = 2004;
$eko = 2004;


if($andi % 4 == 0 && $eko % 4 == 0){
    echo "Keduanya lahir di tahun kabisat";
}
elseif ($andi %  4 == 0) {
    echo "Andi lahir di tahun kabisat";
}elseif($eko % 4 == 0){
    echo "Eko lahir di tahun kabisat";
}
else{
    echo "Keduanya tidak lahir di tahun kabisat";
}

?>