<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
      body{
        background-image:url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTXPru9lJu55EOzaNOiESji7KU5FU3ZAmgWcg&usqp=CAU);
        text-align: center;
      }
      </style>
</head>
<body>

<?php
$servidor = "localhost";
$DB = "lua";
$nome = "root";
$senha = "123456";
$con = mysqli_connect($servidor, $nome, $senha, $DB);

if(!$con) {
    die("MORREU". mysqli_connect_error());
}


$id = $_POST['id'];

$query = "SELECT * FROM sol where id=$id";

$result = mysqli_query($con,$query);
if (mysqli_num_rows($result) > 0)
while($row = mysqli_fetch_array($result))

    ?>

    <form action="exclui.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <h1>Você tem certeza que deseja excluir este registro?</h1>
        <button type="submit">Excluir</button>

</form>
</body>
</html>

