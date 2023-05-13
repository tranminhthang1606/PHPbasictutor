<?php
echo "File Handling <br>";
$file_path = 'file.txt';

if(file_exists($file_path)){
    $file_handle = fopen($file_path,'r');
    $file_content = fread($file_handle,filesize($file_path));
    fclose($file_handle);
    echo $file_content;
}else{
    $file_handle = fopen($file_path,'w');
    $file_content = 'changcoconcacgica';
    fwrite($file_handle,$file_content);
    fclose($file_handle);
}
?>