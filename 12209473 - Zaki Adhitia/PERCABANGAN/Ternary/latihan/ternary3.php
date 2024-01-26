<?php

$date = date("l");

$hari = $date == "Monday" ? "upacara" : "tidak upacara"; 
echo "Hari ini " . $hari;

?>