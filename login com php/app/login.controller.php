<?php namespace Login;

    require "conexao.php";
    require "cadastro.model.php";
    require "cadastro.service.php";
    use CadastroService;
    use Cadastro;
    use Conexao;


    if(!empty($_POST['email']) && !empty($_POST['senha'])) {
        session_start();

        $cadastro = new Cadastro();
        $email = $cadastro->__set('email', $_POST['email']);
        $senha = $cadastro->__set('senha', $_POST['senha']);

        $conexao = new Conexao();

        $cadastroService = new CadastroService($conexao, $cadastro);
        $usuarios = $cadastroService->recuperarCadastro();
        $row = $usuarios->fetchObject();

        if($row->num_rows > 0) {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            $_SESSION['tipo'] = $row->tipo;

            header('Location: home.php');
        } else {
            header('Location: login.php?login=erro2');
        }

        

    } else {
        header('Location: login.php?login=erro');
    } 

?>