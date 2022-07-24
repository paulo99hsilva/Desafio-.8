<?php
$servername = "localhost";
$database = "cadastros";
$username = "root";
$password = "admin";


$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
      die("Falhou: " . mysqli_connect_error());
}
 
echo "Conectou com sucesso";
 
$nome = $_POST ["nome"];
$email = $_POST ["email"];
$nascimento = $_POST ["nascimento"];
$telefone = $_POST ["telefone"];

$sql = "INSERT INTO `cadastros` ( `nome` , `email` , `nascimento`, `telefone` ) VALUES ('$nome', '$email', '$nascimento', '$telefone')";
if (mysqli_query($conn, $sql)) {
      echo "Novo registro guardado com sucesso.";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>