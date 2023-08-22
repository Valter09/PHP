<?php

date_default_timezone_set('America/Fortaleza');

$hora_do_dia=date("H");

function hora($hora_do_dia){
if ($hora_do_dia<6) echo 'Boa madrugada!';
elseif ($hora_do_dia<12) echo 'Bom dia!';
elseif ($hora_do_dia<18) echo 'Boa tarde!';
elseif ($hora_do_dia<24) echo 'Boa noite!';
}

echo hora($hora_do_dia);

?>