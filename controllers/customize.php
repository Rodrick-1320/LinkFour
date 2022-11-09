<?php
session_start();
include("connection.php");

$icon = $_POST["imagem"];
$link = $_POST["link"];
$user = $_SESSION["user"];


if ($icon != "") {

} elseif ($link != "") {

} else {

    $sql = "INSERT INTO customize (id_customize, usuario, icon, link) VALUES ( ' ' ,'$user', '$var_dump($icon);', '$var_dump($link);')";

    if (mysqli_query($connect, $sql)) {
        header('Location: /linkfour/customize.php');
        exit();
    }
}
