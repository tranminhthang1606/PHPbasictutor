<?php
if(isset($_FILES['file'])){
    
    $file_name = basename($_FILES['file']['name']);
    $type = pathinfo($_FILES['file']['name'],PATHINFO_EXTENSION);
    $type_except = ["png","jpg"];
    $size = $_FILES['file']['size'];
    if(!in_array($type,$type_except)||$size>2000000000){
        echo "File ko hợp lệ";

    }else{
        if(move_uploaded_file($_FILES['file']['tmp_name'],"upload/".$file_name)){
            echo "done";
        }else{
            echo "not done";
        }
    }
}

?>