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
            $result = $cadastroService->validaCadastro();

            //verificar variável $row e ver o que ela recebe e verificar condicionais de erro na página do login
            if($result->rowCount() > 0) {
                $row = $result->fetchObject();

                $_SESSION['email'] = $row->email;
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