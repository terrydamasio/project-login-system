<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  
    <?php
        if(!isset($_SESSION['login'])) {
            $login = 'guilherme';
            $senha = '123';

            $loginForm = $_POST['login'];
            $senhaForm= $_POST['senha'];

            if($login == $loginForm && $senha == $senhaForm) {
                $_SESSION['login'] = $login;
                header('Location: home.php');
            } else {
                echo "Dados inválidos";
            }

        } else {
            if(isset($_GET['logout'])) {
                unset($_SESSION['login']);
                session_destroy();
                header('Location: index.php');
            }
        }
    ?>
    
</body>
</html>