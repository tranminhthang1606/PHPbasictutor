<?php
    require('connect.php');
    $sql = "SELECT * from `dienthoai` JOIN `loai` on `loai`.`maloai` = `dienthoai`.`maloai` ";
    $data = $connection -> query($sql);
    $list_ds = $data -> fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
</head>
    
   
<style>
    body{
        text-align: center;
    }
    table{
        margin: 0 auto;
    }
    table thead tr td {
        border-bottom: 2px solid red;
        padding: 5px 10px;
        text-align: center;
    }

    table tbody tr td {
        border-bottom: 2px solid red;
        padding: 5px 10px;
    }
    tbody tr td img{
        width: 100px;
        height: 100px;
    }
</style>
<body>
    <h2>Danh sách điện thoại</h2>
    <h2><a href="add.php">Thêm</a></h2>
    <table>
        <thead>
            <tr>
                <td>STT</td>
                <td>Tên điện thoại</td>
                <td>Giá</td>
                <td>Số lượng</td>
                <td>Ảnh</td>
                <td>Màu</td>
                <td>Loại điện thoại</td>
                <td>Thao tác</td>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($list_ds as $ds){

                ?>
              
            <tr>
                <td><?php echo $ds['madt'];?></td>
                <td><?php echo $ds['tendt'];?></td>
                <td><?php echo $ds['gia']." VNĐ";?></td>
                <td><?php echo $ds['soluong'];?></td>
                <td><img src="upload/<?php echo $ds['anh'];?>" alt=""> </td>
                <td><?php echo $ds['mau'];?></td>
                <td><?php echo $ds['tenloai'];?></td>
                <td><a href="edit.php?id=<?php echo $ds['madt'];?>">Sửa</a>|<a href="delete.php?id=<?php echo $ds['madt'];?>" onclick="return confirm('Bạn có muốn xóa')">Xóa</a></td>
            </tr>
            <?php
        } 
        ?>
        </tbody>
    </table>
</body>
</html>