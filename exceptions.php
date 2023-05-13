<?php
echo "Exception in PHP";

function chia($a,$b){
if(!$b){
    throw new Exception("Cannot divide");

}
return $a/$b;
}

try{
    echo chia(10,5);
    echo chia(5,0);
    echo"no errors";

}catch(Exception $e){
echo "Error:".$e->getMessage()."\n";
}finally{
    echo "Finally come here ...";
}
echo "Run here";
?>