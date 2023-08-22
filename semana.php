<?php
$num1=$_POST['num1'];

switch ($num1){

    case 1:
    echo "O dia da semana é Domingo";
    break;

    case 2:
    echo "O dia da semana é Segunda";
    break;

    case 3:
    echo "O dia da semana é Terça";
    break;

    case 4:
    echo "O dia da semana é Quarta";
    break;

    case 5:
    echo "O dia da semana é Quinta";
    break;

    case 6:
    echo "O dia da semana é Sexta";
    break;

    case 7:
    echo "O dia da semana é Sábado";
    break;

    default:
    echo "ERROR ( valor invalido )";
    
}
?>