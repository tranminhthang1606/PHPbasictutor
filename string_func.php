<?php
$fullname = "Trần Minh Thắng";
// length
echo strlen($fullname)."<br>";
// reverse
echo strrev($fullname)."<br>";
//lower/upper case
echo strtoupper($fullname)."<br>";
echo strtolower($fullname)."<br>";
//replace
echo str_replace(" ","-",strtoupper($fullname))."<br>";
// bắt đầu
str_starts_with($fullname,"Trần");
//kết thúc
str_ends_with($fullname,"Thắng");
//in ra ko theo ký tự đặc biệt

echo htmlspecialchars("<h1>DMM</h1>")."<br>";//liên quan đến vấn đề bảo mật 
//echo "<script>alert('VCL')</script>";
//printf nối xâu ký tự (Tương tự C và Java)
printf('%s bucu %s','cặc','buồi');
printf('pi là %f',3.14);
?>