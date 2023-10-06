<?php

    require "cadastro.model.php";
    require "cadastro.service.php";
    require "conexao.php";

    $cadastro = new Cadastro();
    $cadastro->__set('nome', $_POST['nome']);
    $cadastro->__set('email', $_POST['email']);
    $cadastro->__set('senha', $_POST['senha']); 

    echo '<pre>';
    print_r($cadastro);
    echo '<pre>';

    $conexao = new Conexao();

    $cadastroService = new CadastroService($conexao, $nome, $email, $senha);
    $cadastroService->criarCadastro();
    
    echo '<pre>';
    print_r($cadastroService);
    echo '<pre>';