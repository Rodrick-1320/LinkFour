<?php

@$fone = $_POST['fone'];
@$nome = $_POST['nome'];
@$usuario = $_POST['usuario'];
@$senha = $_POST['senha'];

// if($fone == "" or $nome == "" or $usuario or $senha == ""){
//     echo("
//     <script>
//     alert('Há algum campo vazio!!!')
//     </script>");

// } else{
$servername = "localhost";
$database = "linkfour";
$password = "";
$username = "root";

// Create connection
 $conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
 if (!$conn) {
 }

 $sql = "INSERT INTO cadastro (id, fone, nome, usuario, senha) VALUES ( ' ' , '$fone', '$nome', '$usuario', '$senha')";

 if (mysqli_query($conn, $sql)){
 	echo "<script>
     alert('CONTA CRIADA')
     </script>"; 
 }
 mysqli_close($conn);
// }

// Não está imprimindo o  alert de conta criada
header('Location: /linkfour/register.php');