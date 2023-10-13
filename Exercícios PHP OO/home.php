<?php 
    require "login.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>

    <h2>Bem vindo, 
        <?php
            echo $_SESSION['login'];
        ?>
    
    </h2>
    <a href="logout">Sair</a>
</body>
</html>