<?php
  $n=$_POST['number'];
  if($n<2){
    echo "ERROR (digite um número da sequência)";
 }else{ 
  $ultimo=1;
  $penultimo=0;
    
  echo "0<br />1<br />";
  for($count=1 ; $count<=$n-2 ; $count++){
   $atual = $ultimo + $penultimo;
   echo $atual."<br />";
   
   $penultimo = $ultimo;
   $ultimo = $atual;
  } 
}
?>