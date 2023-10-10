<?php namespace Login;

    require "conexao.php";
    require "cadastro.model.php";
    require "cadastro.service.php";
    use CadastroService;
    use Cadastro;
    use Conexao;

    $cadastro = new Cadastro();
    $cadastro->__set('email', $_POST['email']);
    $cadastro->__set('senha', $_POST['senha']);

    if(isset($email) or isset($senha)) {
        echo '';
    } else {
        header('Location: home.php');
    }
    

?>