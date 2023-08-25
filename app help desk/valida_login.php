<?php
    //iniciando sessão
    session_start();

    //criando relação de usuários de forma estática
    $usuarios = [ 
        ['email' => 'adm@teste.com.br', 'senha' => '123'],
        ['email' => 'user1@teste.com.br', 'senha' => '123'],
        ['email' => 'user2@teste.com.br', 'senha' => '123']
    ];

    $usuarios_autenticado = false;

    foreach($usuarios as $user){
        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
            $usuarios_autenticado = true;
        }  
    }

    if($usuarios_autenticado) {
        //indice de autenticacao
        $_SESSION['autenticado'] = 'SIM';
        echo 'Usuario autenticado';
        header('Location: home.php');
    } else {
        $_SESSION['autenticado'] = 'NAO';
        header('Location: index.php?login=erro ');
    }
    //verificar o valor dos indices nas outras páginas para sabermos se podemos exibir ou não


?>