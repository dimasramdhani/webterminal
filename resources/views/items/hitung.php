<?php
if(isset($_POST['hitung'])) {
$ohm = ($_POST['ohm']);
$amper = ($_POST['amper']);
$hasil = $ohm * $amper ;
echo "Voltase yang di sarankan 
untuk menjaga ketahanan Baterai adalah $hasil Volt";}
?>