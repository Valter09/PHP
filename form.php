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
      }
      </style>
</head>
<body>
<center>
    <h1>Formulário</h1>
   <form action="form.php" method="POST">
   <form action="confirma.php" method="POST">
   <input type="number" name="id" id="id" placeholder="id : " required ><br><br>
      <input  type="text" name="nome" id="nome" placeholder="Nome: " required ><br><br>

      <input type=submit  value="Enviar">
      <td class="mailbox-date">
    </td>
    <br>
    <br>
      </form>
<?php

$servername = "localhost";    
$username = "root";
$password = "123456";
$database = "lua";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn){
    die("Connection Failed:" . mysqli_connect_error());
     }

     echo "Connected successully";


     $query = "SELECT * from sol";
     $result = mysqli_query($conn, $query);
     if(mysqli_num_rows($result) > 0)
     echo "<table border='1'>";
     echo "<tr>";
     echo "<th>id</th>";
     echo "<th>nome</th>";
     echo "<th>excluir</th>";
     echo "<th>editar</th>";
     echo "</tr>";

     while($row = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['nome'] . "</td>";
        echo "<td>
        <form action='confirma.php' method='post'>
        <center><button type='submit' name='id' value=".$row['id'].">X</button></center>

        </form>
        </td>";
        echo "<td>
        <form action='editar.php' method='post'>
        <center><button type='submit' name='id' value=".$row['id'].">Editar</button></center>
        </form>
        </td>";
        echo "</tr>";
     }


$id=$_POST["id"];
$nome=$_POST["nome"];


$sql = "INSERT INTO sol VALUES ('$id','$nome')";
mysqli_query($conn,$sql) or die ("erro");
mysqli_close($conn);
echo "cliente cadastrado";

$delete = "DELETE FROM sol WHERE id='$id'";




$conn->close();
?>
</center>
</body>
</html>