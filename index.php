<?php
echo "Hello world <br>";
/*xuất báo kiểu */
var_dump("Hello world");
/*xuất dạng chuỗi*/
var_export("Hello world");
// Khai báo 
$age = 8;

echo $age;
$array = [
    "cứt" => "Super cứt",
    "đái" => "super đái",
    "ỉa" => "super ỉa"
];
echo "<br>";
var_dump($array);
echo "<br>";
var_export($array);
echo $array["cứt"];
echo "<br>";
print_r($array);

echo "$age + hello world";
if(empty($array)){
echo "DMMM";
}else{
echo "Ko Dmm";
}
?>