<?php
session_start();
include("connection.php");

$icon = $_POST["imagem"];
$link = $_POST["link"];
$user = $_SESSION["user"];


if ($icon == "" || $link == "" || $user == "") {
    $_SESSION['empty_fields'] = true;
    header('Location: /linkfour/customize.php');
} else {

    $sql = "INSERT INTO customize (id_customize, usuario, icon, link) VALUES ( ' ' ,'$user', '$icon', '$link')";

    if (mysqli_query($connect, $sql)) {
        $_SESSION['added_data'] = true;
        header('Location: /linkfour/customize.php');
        exit();
    }
}
