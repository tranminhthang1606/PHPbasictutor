<?php
define('DATABASE_SERVER', 'localhost:3306');
define('DATABASE_USER', 'root');
define('DATABASE_PASSWORD', '');
define('DATABASE_NAME','Database');

$connection = null;
try {
    $connection = new PDO("mysql:host=" . DATABASE_SERVER . ",dbname= " .DATABASE_NAME,DATABASE_USER,DATABASE_PASSWORD);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "succesfully";

} catch (PDOException $e) {
    echo "<br>Failed:" . $e->getMessage();

    $connection = null;
}
?>