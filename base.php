<?php
  $base=$_POST['num1'];
  $exp=$_POST['num2'];
  
  $resultado = 1;
  $count=1;
  
  while($count<=$exp){
   $resultado *= $base;
   $count++;
  }
  echo "Resultado: $resultado<br />";
?>