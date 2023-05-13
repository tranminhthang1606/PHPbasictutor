<?php
session_start();
if (isset($_SESSION['email'])) {
    echo "Welcome to vaix loon cham com".'<br>';
    echo "email:" . $_SESSION['email'];
    echo "<a href='logout.php'>Logout</a>" . '<br>' ;
} else {
    echo "Vang lai";
    echo "<a href='Session.php'>Back to Login</a>";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    Vax loonf
    
</body>

</html>