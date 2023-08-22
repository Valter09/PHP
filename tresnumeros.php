<?php
$num1=$_POST['num1'];
$num2=$_POST['num2'];
$num3=$_POST['num3'];

$maior = $num1;
if ($num2 > $num1 and $num2 > $num3)
{$maior = $num2;
} else if ($num3 > $num1 and $num3 > $num2)
{
    $maior = $num3;
    } 
$menor = $num1;

    if ($num2 < $num3 and $num2 < $num1){
    $menor = $num2;
    } else if ($num3 < $num2 and $num3 < $num1){ 
    $menor = $num3;
     }
 echo "O menor número digitado foi: " , $menor , "<br>";
 echo "O maior número digitado foi: " , $maior , "<br>";
?>
        