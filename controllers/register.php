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
    $_SESSION['usuario_existe'] = true;
    header('Location: register.php');
    exit;
}

$msg = "";

if ($fone  == "" ) {
    $msg .= 'Preencha o campo de telefone ';
    echo "<script> alert( ' $msg ' ) </script>";
} elseif ($nome == "") {
    $msg .= 'Preencha o campo do nome ';
    echo "<script> alert( ' $msg ' ) </script>";
} elseif ($usuario == "") {
    $msg .= 'Preencha o campo de nome de usúario ';
    echo "<script> alert( ' $msg ' ) </script>";
} elseif ($senha == "") {
    $msg .= 'Preencha o campo da senha';
    echo "<script> alert( ' $msg ' ) </script>";
} else {

    $sql = "INSERT INTO cadastro (id, fone, nome, usuario, senha) VALUES ( ' ' , '$fone', '$nome', '$usuario', '$senha')";

    if (mysqli_query($connect, $sql)) {
        
    }
    mysqli_close($connect);
}

// Não está imprimindo o  alert de conta criada
header('Location: /linkfour/register.php');