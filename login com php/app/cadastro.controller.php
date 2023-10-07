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
            $cadastroService->cadastrar();

            header('Location: index.php?cadastro=sucesso');
        } else if(empty($_POST['nome']) or empty($_POST['email']) or empty($_POST['senha'])) {    
            header('Location: index.php?cadastro=erro');
        }

    } else if($acao == 'login') {
        $cadastro = new Cadastro();

    }

?>
