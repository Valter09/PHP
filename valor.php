<?php
$num1=$_POST['num1'];
if($num1>10){
    echo "ERROR (digite um número da sequência)";
}elseif($num1<0){
    echo "ERROR (digite um número da sequência)";
}else{
    echo $num1;
}

?>