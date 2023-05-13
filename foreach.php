<?php
$chuoi = ["táo","ổi","mận"];
/*
for($quachuoi = 0; $quachuoi <= count($chuoi);$quachuoi++){
    var_r($quachuoi)
}
*/
foreach ($chuoi as $bana) {
    echo "$bana <br>";
}
for($quachuoi = 0; $quachuoi < count($chuoi);$quachuoi++){
    print_r($chuoi[$quachuoi]);
}
?>