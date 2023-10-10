<?php namespace Cadastro;

    require "conexao.php";
    require "cadastro.model.php";
    require "cadastro.service.php";
    use CadastroService;
    use Cadastro;
    use Conexao;

    if(!empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
        $cadastro = new Cadastro();
        $cadastro->__set('nome', $_POST['nome']);
        $cadastro->__set('email', $_POST['email']);
        $cadastro->__set('senha', $_POST['senha']);

        $conexao = new Conexao();
            
        $cadastroService = new CadastroService($this->conexao, $this->cadastro);
        $usuarios = $cadastroService->validaCadastro();

        if($usuarios->rowCount() >= 1) {
            header('Location: index.php?cadastro=erro2'); //erro2 = usuario já existe            
        } else {
            $cadastroService->cadastrar(); 
            header('Location: index.php?cadastro=sucesso');
        }

    } else if(empty($_POST['nome']) or empty($_POST['email']) or empty($_POST['senha'])) {    
        header('Location: index.php?cadastro=erro');//erro = campos vazios
    }
?>
