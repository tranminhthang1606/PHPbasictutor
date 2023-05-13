<?php
$names = ["john", "anna", "hoang", "tony"];

var_dump(in_array("elon", $names));
//thêm vào cuối
array_push($names, "lon");
//thêm vào đầu
array_unshift($names, "daubuoi");
//xóa cuối
array_pop($names);
//xóa đầu
array_shift($names);
//unset xóa vị trí ko đếm lại index
unset($names[2]);
// chắt array
$chunked = array_chunk($names, 2);
print_r($chunked);
echo "<br>";
print_r($names);

$array1 = [2, 3, 6];
$array2 = [5, 6, 8];
$mergearray = array_merge($array1, $array2);
print_r($mergearray);

// copy
$array_copy = [...$mergearray];
//combine
$a = ['name', 'diachi', 'tuoi'];
$b = ['thang', 'hai phong', 20];
$c = array_combine($a, $b);

print_r($c);
/* lật ngược key và value
print_r(array_flip($c));
*/

//tạo mảng nhanh 
$number = range(1, 10);
print_r($number);
// tạo mảng dựa theo mảng cũ nhưng giá trị khác

$double_number = array_map(function ($eachnum) {
    return $eachnum * $eachnum;
}, $number);
print_r($double_number);

// filter with array

$filter_num = array_filter($number, fn($num) => $num % 2 == 0);
print_r($filter_num);
?>