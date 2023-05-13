<?php
require "connect.php";
$sql = "SELECT * FROM `loai`";
$data = $connection->query($sql);
$list = $data->fetchAll();
$ten_dt = "";
$gia_dt = "";
$solg_dt = "";
$ma_dt = "";
$mau_dt = "";
$file_name = "";
if (isset($_POST['submit'])) {
    $ten_dt = $_POST['tendt'];
    $gia_dt = $_POST['gia'];
    $solg_dt = $_POST['soluong'];
    $mau_dt = $_POST['mau'];
    $ma_dt = $_POST['loaidt'];
    if (empty($ten_dt)) {
        echo "Tên điện thoại không được để trống";
    } else {
        $ten_dt = $_POST['tendt'];
    }


    if (empty($gia_dt)) {
        echo "Nhập giá điện thoại";
    } else if ($gia_dt < 0) {
        echo "Giá phải là lớn hơn 0";
    } else {
        $gia_dt = $_POST['gia'];
    }


    if (empty($solg_dt)) {
        echo "Số lượng không được để trống";
    } else if ($solg_dt < 0) {
        echo "Số lượng phải lớn hơn 0";
    } else {
        $solg_dt = $_POST['soluong'];
    }

    if (isset($_FILES['file'])) {

        $file_name = basename($_FILES['file']['name']);
        $type = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        $type_except = ["png", "jpg"];
        $size = $_FILES['file']['size'];
        if (!in_array($type, $type_except) || $size > 2000000000) {
            echo "File ko hợp lệ";

        } else {
            if (move_uploaded_file($_FILES['file']['tmp_name'], "upload/" . $file_name)) {
                echo "done";
            } else {
                echo "not done";
            }
        }
    }
    if (empty($mau_dt)) {
        echo "Nhập màu cho điện thoại";
    } else {
        $mau_dt = $_POST['mau'];
    }

    if (empty($ma_dt)) {
        echo "Chọn mã điện thoại";
    } else {
        $ma_dt = $_POST['loaidt'];
    }

    $insert = "INSERT INTO masv_examphp1.dienthoai (`tendt`, `gia`, `soluong`, `anh`, `mau`, `maloai`) VALUES ('$ten_dt', '$gia_dt', '$solg_dt', '$file_name', '$mau_dt', '$ma_dt')";
    $connection->exec($insert);
    print_r($file_name);

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
    <form action="" enctype="multipart/form-data" method="post">
        <label for="">Tên điện thoại</label>
        <input type="text" name="tendt">
        <label for="">Giá</label>
        <input type="number" name="gia">
        <label for="">Số lượng</label>
        <input type="number" name="soluong">
        <label for="">Ảnh</label>
        <input type="file" name="file">
        <label for="">Màu</label>
        <input type="text" name="mau">
        <label for="">Loại điện thoại</label>
        <select name="loaidt">
            <?php
            foreach ($list as $item) {
                ?>
                <option value="<?php echo $item['maloai'] ?>"><?php echo $item['tenloai'] ?></option>
                <?php
            }
            ?>

        </select>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>

</html>