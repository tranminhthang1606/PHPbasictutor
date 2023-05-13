<?php
//session lưu trữ trên server
// có thể truy cập nhiều trang web mà ko mất dữ liệu
session_start();
if(isset($_POST['submit'])){
   $email = htmlspecialchars($_POST['username'],FILTER_SANITIZE_SPECIAL_CHARS);
   $password = htmlspecialchars($_POST['password'],FILTER_SANITIZE_SPECIAL_CHARS);
   if($email == 'thangtmph29942@fpt.edu.vn' && $password=='123456'){
    $_SESSION['email'] = $email;
    header('Location:New.php');
   }else{
    echo "Incorrect";
   }
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
    <h1>Login account</h1>
    <form action='<?php echo $_SERVER['PHP_SELF'] ?>' method="POST">
        <label for="name">Username:</label>
        <input type="text" name="username">
        <label for="age">Password:</label>
        <input type="password" name="password">
        <input type="submit" value="Submit" name="submit">
    </form>
</body>

</html>