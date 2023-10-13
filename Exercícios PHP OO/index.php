<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  
<h2>Login</h2>
<form action="login.php" method="post">
    <input type="text" placeholder="usuario" name="login">
    <input type="password" placeholder="senha" name="senha">
    <button type="submit">Entrar</button>
</form>