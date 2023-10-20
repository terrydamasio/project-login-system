<?php

    require "conexao.php";
    require "cadastro.model.php";
    require "cadastro.service.php";

    if(!empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
        $cadastro = new Cadastro();
        $cadastro->__set('nome', $_POST['nome']);
        $cadastro->__set('email', $_POST['email']);
        $cadastro->__set('senha', $_POST['senha']);

        $conexao = new Conexao();
            
        $cadastroService = new CadastroService($conexao, $cadastro);
        $usuarios = $cadastroService->validaCadastro();

        if($usuarios->rowCount() > 0) {
            header('Location: cadastro.php?cadastro=erro2'); //erro2 = usuario já existe            
        } else {
            $cadastroService->cadastrar(); 
            header('Location: cadastro.php?cadastro=sucesso');
        }

    } else if(empty($_POST['nome']) or empty($_POST['email']) or empty($_POST['senha'])) {    
        header('Location: cadastro.php?cadastro=erro');//erro = campos vazios
    }
?>
