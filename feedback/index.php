<?php
require("component/header.php");
echo "Small Project";
// required : bắt buộc; include : ko bắt buộc (Warning)
$error_name = $error_email = $error_body = '';
$name = $email = $body = '';
if (isset($_POST['submit'])) {
    if (empty($_POST['name'])) {
        $error_name = "Thiếu tên đăng nhập";
    } else {
        $name = htmlspecialchars($_POST['name']);
    }
    if (empty($_POST['email'])) {
        $error_email = "Thiếu/Sai email";
    } else {
        $email = htmlspecialchars($_POST['email']);
    }
    if (empty($_POST['body'])) {
        $error_body = "Thiếu nội dung";
    } else {
        $body = htmlspecialchars($_POST['body']);
    }
}
$validate_success = empty($error_name) && empty($error_email) && empty($error_body);
if ($validate_success) {
    $sql = "INSERT INTO feedbackproject.feedback(name,`email`,`body`) VALUES(?,?,?)";

    try {
        $statement = $connection->prepare($sql);
        $statement->bindParam(1, $name);
        $statement->bindParam(2, $email);
        $statement->bindParam(3, $body);
        $statement->execute();
        echo "<br>Inserted into database !!";

    } catch (PDOException $e) {
        echo "<br>Cannot insert . Error:" . $e->getMessage();
    }
}

?>


<h1>Enter your feedback here</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
    <div class="mb-3">
        <input type="text" class="form-control " name="name" placeholder="What is your name ?">
        <p class="text-danger">
            <?php echo $error_name ?>
        </p>
    </div>
    <div class="mb-3">
        <input type="email" class="form-control" name="email" placeholder="Enter your email">
    </div>
    <p class="text-danger">
        <?php echo $error_email ?>
    </p>
    <div class="mb-3">
        <textarea class="form-control
            " name="body" placeholder="Enter your feedback" rows="2"></textarea>
    </div>
    <p class="text-danger">
        <?php echo $error_body ?>
    </p>
    <div class="mb-3">
        <input type="submit" class="btn btn-primary" name="submit" value="Send">
    </div>
</form>
<?php include("component/footer.php") ?>