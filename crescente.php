<?php
  $menor = $_POST['menor'];
  $meio = $_POST['meio'];
  $maior = $_POST['maior'];

  if($meio < $menor){
   $temp=$menor;
   $menor=$meio;
   $meio=$temp;
  }
  
  if($maior < $menor){
   $temp=$menor;
   $menor=$maior;
   $maior=$temp;
  }
  
  if($maior < $meio){
   $temp=$meio;
   $meio=$maior;
   $maior=$temp;
  }
  
  echo $menor , $meio , $maior;
 ?>