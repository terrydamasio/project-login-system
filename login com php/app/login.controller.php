<?php namespace Login;

    require "conexao.php";
    require "cadastro.model.php";
    require "cadastro.service.php";
    use CadastroService;
    use Cadastro;
    use Conexao;

    if(!empty($_POST['email']) && !empty($_POST['senha'])) {

        if(!isset($_SESSION['login'])) {
            $cadastro = new Cadastro();
            $emailForm = $cadastro->__set('email', $_POST['email']);
            $senhaForm = $cadastro->__set('senha', $_POST['senha']);
    
            $conexao = new Conexao();
    
            $cadastroService = new CadastroService($conexao, $cadastro);
            $usuarios = $cadastroService->validaCadastro();
            $row = $usuarios->fetchObject();
            
            //verificar variável $user e ver o que ela recebe

            if($row->email == $emailForm && $row->senha == $senhaForm) {
                $_SESSION['email'] = $emailForm;
                $_SESSION['nome'] = $row->nome;
                $_SESSION['senha'] = $row->senha;

                header('Location: home.php');
            } else {
                header('Location: login.php?login=erro2');
            }
        } else {
            if(isset($_GET['logout'])) {
                unset($_SESSION['login']);
                session_destroy();
                header('Location: login.php');
            }
        }

    } else {
        header('Location: login.php?login=erro');
    } 

?>