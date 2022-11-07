<?php
include("connection.php");

$user = mysqli_real_escape_string($connect, trim($_POST['user']));
$password = mysqli_real_escape_string($connect, trim(md5($_POST['password'])));
$_SESSION["user"] = $user;


if ($_POST['user'] == '') {
    header('Location: /linkfour/login.php');
}
if ($_POST['password'] == '') {
    header('Location: /linkfour/login.php');
}


if ($_POST['user'] != '' && $_POST['password'] != '') {

    

    if (!isset($_POST['user']) || !isset($_POST['password'])) {
        header('location: /linkfour/login.php');
        exit();
    } else {
        session_start();
        
        $user = mysqli_real_escape_string($connect, $user);
        $password = mysqli_real_escape_string($connect, $password);

        $query = "select id, usuario from cadastro where usuario='{$user}' and senha = '{$password}'";

        $result = mysqli_query($connect, $query);

        $row = mysqli_num_rows($result);

        if ($row == 1) {
            $_SESSION['user'] = $user;
            header('Location: /linkfour/customize.php');
            exit();
        } else {
            // echo "<script> alert( Usuario e/ou senha incorreto(s) ) </script>"; 
            header('Location: /linkfour/login.php');
            
            exit();
        }
    }
}
