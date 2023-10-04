<?php
    require "conexao.php";

    $conexao = new Conexao();
    $conectar = $conexao->conectar();

    if(isset($_POST['email']) && isset($_POST['senha'])) {

        if(strlen($_POST['email']) == 0) {
            echo "Preencha seu email.";
        } else if(strlen($_POST['senha']) == 0) {
            echo "Preencha sua senha.";
        } else {
            
            $query = "select * from tb_usuarios where email = :email and senha = :senha";
            $stmt = $conectar->prepare($query);
            $stmt->execute();
            $stmt->fetchAll(PDO::FETCH_ASSOC);

            if($stmt == 1) {

                if(!isset($_SESSION)) {
                    session_start();
                }                                               

                $_SESSION['id'] = $usuario['id'];
                $_SESSION['nome'] = $usuario[':nome'];

                header("Location: painel.php");

            } else {
                echo "Falha no login. Email ou senha incorretos!";
            }
        }

    }