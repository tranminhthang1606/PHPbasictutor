<?php
//lưu giữ liệu trên cookies trang web trong 1 khoảng tgian
echo "Cac";
setcookie('name','Thang',time() + 24*3600);//('key',value, time);

// check
if(isset($_COOKIE['name'])){
    echo $_COOKIE['name'];
}
//remove cookie
//setcookie('name','',time()-24*3600);

?>