<?php
include 'conection.php';

$username = $_POST['username'];
$nome = $_POST['name'];
$password = $_POST['password'];
$email = $_POST['email'];

$cadastro = mysqli_query($conn, "insert into usuario(username, userpassword, nomeUser, emailUser) VALUES ('$username', '$password', '$nome', '$email')");

if (!$cadastro) {
    echo "<script>alert('Erro ao cadastrar :(')
	location.href='cadastro.html'</script>";
}

else {
    echo "<script>alert('Cadastrado com sucesso :)')
	location.href='login.html'</script>";
}

?>