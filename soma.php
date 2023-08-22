<?php
$num1=$_POST['num1'];
$num2=$_POST['num2'];
$num3=$_POST['num3'];

function soma($num1 , $num2, $num3){
    return $num1 + $num2 + $num3;
    
}
echo soma(6, 4, 3);
?>

