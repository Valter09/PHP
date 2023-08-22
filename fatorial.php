<?php
    $i = $_POST['number'];
    $calc = 1;
    while ($i > 1){
        $calc *= $i;
        $i--;
    }

    echo $calc
?>  