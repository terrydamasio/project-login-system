<?php 
    require "conexao.php";
    require "cadastro.model.php";
    require "cadastro.service.php";

    session_start();

    if(!empty($_POST['email']) && !empty($_POST['senha'])) {
        $cadastro = new Cadastro();
        $emailForm = $cadastro->__set('email', $_POST['email']);
        $senhaForm = $cadastro->__set('senha', $_POST['senha']);
        
        $conexao = new Conexao();
        $cadastroService = new CadastroService($conexao, $cadastro);
        $result = $cadastroService->validaCadastro();

        //verificar variável $row e ver o que ela recebe e verificar condicionais de erro na página do login
        if($result->rowCount() > 0) {
            $row = $result->fetchObject();
            
            
            echo $_SESSION['email'] = $row->email . '<br>';
            echo $_SESSION['nome'] = $row->nome . '<br>';
            echo $_SESSION['senha'] = $row->senha;
                   
            header('Location: home.php'); 
        } else {
            header('Location: index.php?login=erro2');
        }
    } else { 
        header('Location: index.php?login=erro');
    }
    

?>