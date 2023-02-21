<?php 

session_start(); 

if(!isset($_SESSION["usuario_logado"]))
    header("Location: login.php") 

    ?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boas vindas </title>
</head>
<body>
    <h1>Bem vindo a página restrita</h1>
</body>
</html>