<?php
$localhost = "localhost";
$dbname = "masv_examphp1";
$username = "root";
$password = "";
try{
    $connection = new PDO("mysql:host=$localhost;dbname=$dbname",$username,$password);
    $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "done";
}catch(PDOException $e){
    $e->getMessage();
    echo $e;
}

?>