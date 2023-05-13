<?php
echo "File upload <br>";
//print_r($_FILES);
if (isset($_POST['submit'])) {
    $permitted_extensions = ['png', 'jpg', 'jpeg'];
    $file_name = $_FILES['upload']['name'];
    if (!empty($_FILES['upload']['name'])) {
        //print_r($_FILES);
        $file_size = $_FILES['upload']['size'];
        $file_temp_name = $_FILES['upload']['tmp_name'];
        // sửa file name tránh trùng lặp
        $file_name_generated = time() . "-" . $file_name;
        $destination_path = "uploads/$file_name_generated";
        $file_extension = explode('.', $file_name);
        $file_extension = strtolower(end($file_extension)); //cắt đuôi file qua dấu chấm
        echo "$file_name <br>$file_size<br>$file_temp_name<br>$destination_path<br>$file_extension";
        if (in_array($file_extension, $permitted_extensions)) { //check trùng nhau
            if ($file_size <= 100000000) {
                move_uploaded_file($file_temp_name, $destination_path);
                echo "done";
            } else {
               echo '<p>Not done</p>';
            }

        }else{
            echo $mess= '<p>Not done</p>';
        }
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
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
        Choose image to upload
        <input type="file" name="upload" id="">
        <input type="submit" value="submit" name="submit">


    </form>
</body>

</html>