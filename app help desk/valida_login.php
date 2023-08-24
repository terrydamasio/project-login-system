<?php

    //criando relação de usuários de forma estática
    $usuarios = [ 
        ['email' => 'adm@teste.com.br', 'senha' => '123'],
        ['email' => 'user1@teste.com.br', 'senha' => '123'],
        ['email' => 'user2@teste.com.br', 'senha' => '123'],
    ]; 

    //atribuindo valor false para autenticação do usuario 
    $usuario_autenticado = false;


    //usar foreach para percorrer cada elemento - usar as $user para percorrer cada valor do array de forma individual e verificar se os dados de login são validos
    foreach($usuarios as $user) {
        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
            $usuario_autenticado = true;
        }
    }

    //validação de login
    if($usuario_autenticado) {
        echo 'Usuario autenticado';
    } else {
        header('Location: index.php?login=erro');
    }

?>