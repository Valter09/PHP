<?php

var_dump($id);
$id = $_POST["id"];

$servidor = "localhost";
$DB = "lua";
$nome = "root";
$senha = "123456";
$con = mysqli_connect($servidor, $nome, $senha, $DB);

if(!$con) {
    die("MORREU". mysqli_connect_error());
}
echo "SUCESSO";

$query="DELETE FROM sol WHERE id = $id";
mysqli_query($con, $query);

header("Location: ./form.php");

?>