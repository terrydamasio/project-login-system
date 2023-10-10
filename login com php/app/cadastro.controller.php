<?php
    require "conexao.php";
    require "cadastro.model.php";
    require "cadastro.service.php";

    $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

    if($acao == 'cadastrar') {

        if(!empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
            $cadastro = new Cadastro();
            $cadastro->__set('nome', $_POST['nome']);
            $cadastro->__set('email', $_POST['email']);
            $cadastro->__set('senha', $_POST['senha']);


            $conexao = new Conexao();
            
            $cadastroService = new CadastroService($conexao, $cadastro);
            $usuarios = $cadastroService->validaCadastro();

            if($usuarios->rowCount() >= 1) {
                header('Location: index.php?cadastro=erro2');
            } else {
                $cadastroService->cadastrar();
                header('Location: login.php?cadastro=sucesso');
            }

        } else if(empty($_POST['nome']) or empty($_POST['email']) or empty($_POST['senha'])) {    
            header('Location: index.php?cadastro=erro');
        }

    } else if($acao == 'login') {

        session_start();

        $cadastro = new Cadastro();

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $cadastro->__set('email', $_POST['email']);
            $senha = $cadastro->__set('senha', $_POST['senha']);
        }

        $conexao = new Conexao();
            
        $cadastroService = new CadastroService($conexao, $cadastro);
        $recuperaCadastro = $cadastroService->recuperarCadastro();

        if($recuperaCadastro->rowCount() === 1) {
            $row = $recuperaCadastro->fetchAll();

            if(password_verify($senha, $row['senha'])) {
                $_SESSION['loggedin'] == true;

                echo 'Logado com sucesso';
                exit;
            }
        } else {

            $error = "Usuário ou senha incorretos";
            echo $error;
        }
        
    }

?>
