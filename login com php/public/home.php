<?php 
    session_start();
    if(empty($_SESSION)) {
        header('Location: login.php?login=erro3'); //redireciona se acessar rota sem logar
    }
    require "login.controller.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Sucesso!</h1>
    <?php 
        echo "<br>Seja bem vindo, " . $_SESSION['nome'] . "!";
    ?>
    <a href="logout">Sair</a>
</body>
</html>