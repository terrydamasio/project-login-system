<?php
    session_start();
    if(empty($_SESSION)) {
        header('Location: login.php?login=erro3'); //redireciona se acessar rota sem logar
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Home</title>
</head>
<body> 
    <div class="container">
        <div class="form-image">
            <img src="assets/img//undraw_shopping_re_3wst.svg" alt="">
        </div>
        <div class="left-side">
            <div class="form-header">
                <div class="title">
                    <h1>Sucesso no Login!</h1>
                </div>

                <div class="login-button">
                    <a href="logout.php">Sair</a>
                </div>
            </div>

            <div class="#">
                <h4>Seja bem vindo, <?= $_SESSION['nome'] ?></h4>
            </div>
        </div>
    </div>

</body>
</html>