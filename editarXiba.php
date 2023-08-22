<?php
$servidor = "localhost";
$DB = "lua";
$nome = "root";
$senha = "123456";
$con = mysqli_connect($servidor,$nome,$senha,$DB);
var_dump($_POST);
$idOld=$_POST['idOld'];
$idNew=$_POST['idNew'];
$nome=$_POST['nome'];
    $id = $_POST['id'];
    $nome = $_POST['nome'];

    $query = "UPDATE sol SET nome=\"$nome\", id=$idNew WHERE id=$idOld";
    echo $query;

    $result = mysqli_query($con,$query);

    if (mysqli_query($con, $query)) {
        echo "Dados atualizados com sucesso.";
    } else {
        echo "Erro ao atualizar os dados: " . mysqli_error($conn);
    }
    mysqli_close($con);



header("Location: form.php");
?>