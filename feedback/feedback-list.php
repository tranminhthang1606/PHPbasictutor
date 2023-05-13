<?php
require("./component/header.php");
echo "<h1>List of feedback</h1>";
$sql = "SELECT name,email,body from feedbackproject.feedback";
if ($connection != null) {
    try {
        $statement = $connection->prepare($sql);
        $statement->execute();
        $result = $statement->setFetchMode(PDO::FETCH_ASSOC);
        $feedbacks = $statement->fetchAll();
        foreach ($feedbacks as $feedback) {
            $name = $feedback['name'] ?? '';
            $email = $feedback['email'] ?? '';
            $body = $feedback['body'] ?? '';
            echo "<h3>$name,$body,$email</h3>";
        }

    } catch (PDOException $e) {
        echo "Không kết nối đc database . Error:" . $e->getMessage();
    }
}





include("./component/footer.php")

    ?>