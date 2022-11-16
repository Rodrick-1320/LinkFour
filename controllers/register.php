<?php
session_start();
include("connection.php");

$fone = mysqli_real_escape_string($connect, trim($_POST['fone']));
$nome = mysqli_real_escape_string($connect, trim($_POST['nome']));
$usuario = mysqli_real_escape_string($connect, trim($_POST['usuario']));
$senha = mysqli_real_escape_string($connect, trim(md5($_POST['senha'])));


$sql = "select count(*) as total from cadastro where usuario = '$usuario'";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($result);

if ($row['total'] == 1) {
        header('Location: /linkfour/register.php');
        $_SESSION['existing_user'] = true ;    
} else{
    if($fone == "" || $nome == "" || $usuario == "" || $senha == "" ){
        $_SESSION['empty_fields'] = true;
    }else{
        $_SESSION['account_created'] = true;

        $sql = "INSERT INTO cadastro (id, fone, nome, usuario, senha) VALUES ( ' ' , '$fone', '$nome', '$usuario', '$senha')";

        if (mysqli_query($connect, $sql)) {
        }
        mysqli_close($connect);
    }
    
    header('Location: /linkfour/register.php');
}
