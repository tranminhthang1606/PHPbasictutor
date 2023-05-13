<?php
$func = function($c,$d){
   return $c+$d;
};
//arrow function

$arrowfunc = fn($a, $b) =>
    $a + $b;
;

echo $arrowfunc(2, 3);
echo $func(6,7);
?>