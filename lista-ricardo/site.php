<?php
session_start();
//print_r($_SESSION);
if($_SESSION['mail'] == null || $_SESSION['pas'] == null){
    unset($_SESSION['mail']);
    unset($_SESSION['pas']);
    header('Location: Login.php');
}
$logado = $_SESSION['mail'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site</title>
</head>
<body>
    <a href="sair.php">Sair</a>
    <h1>Bem vindo ao site</h1>
</body>
</html>