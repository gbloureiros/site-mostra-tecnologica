<?php
include 'conection.php';

$consulta = "SELECT * FROM usuario";
$con = mysqli_query($conn, "SELECT * FROM usuario");
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Pessoas dispostas a ajudar.</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <h1>Lista de pessoas que se cadastraram para ajudar</h1>
    <table border="1">
        <tr>
          <td>Nome do Usuário</td>
          <td>Email para contato</td>
        </tr>
        <?php while($dados = mysqli_fetch_array($con)){ ?>
        <tr>
          <td><?php echo $dados["nomeUser"] ?></td>
          <td><?php echo $dados["emailUser"] ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>