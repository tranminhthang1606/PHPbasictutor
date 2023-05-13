<?php
//print_r($_SERVER);
//print_r($_GET);
//print_r($_POST);
/*
if (isset($_GET['name'])) {
    echo $_GET['name'];
}
if (isset($_GET['age'])) {
    echo $_GET['age'];
}
*/
// toán tử 3 ngôi

$name = $_GET['name'] ?? '';
$age = $_GET['age'] ?? '';

echo $name;
echo $age;

// <script> code </script> (Nguy hiểm bảo mật) => htmlspecialchars() để lọc code thành string
// $user = htmlspecialchars($_POST['username'] ?? '');
/*
$pass = htmlspecialchars($_POST['password'] ?? '');
//Cách khác để check 
$user = filter_var($_POST['username'],FILTER_SANITIZE_SPECIAL_CHARS);

echo $user;
echo $pass;
*/
//từ đây có thể gửi về server
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
    <form action='<?php echo $_SERVER['PHP_SELF'] ?>' method="GET">
        <label for="name">Username:</label>
        <input type="text" name="name">
        <label for="age">Password:</label>
        <input type="password" name="age">
        <input type="submit" value="Submit">
    </form>
</body>

</html>