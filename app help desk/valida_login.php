<?php
    //iniciando sessão
    session_start();

    //variável que identifica se a autenticação foi realizada
    $usuarios_autenticado = false;
    $usuario_id = null;
    $usuario_perfil_id = null;

    $perfis = array(1 => 'Administrativo', 2 => 'Usuário');
    
    //criando relação de usuários de forma estática
    $usuarios = [ 
        ['id' => 1, 'email' => 'adm@teste.com.br', 'senha' => '123', 'perfil_id' => 1],
        ['id' => 2, 'email' => 'user@teste.com.br', 'senha' => '123', 'perfil_id' => 2],
        ['id' => 3, 'email' => 'maria@teste.com.br', 'senha' => '123', 'perfil_id' => 2],
        ['id' => 4, 'email' => 'joao@teste.com.br', 'senha' => '123', 'perfil_id' => 2]
    ];

    //percorrer cada elemento dos usuarios e verificar se estão batendo
    foreach($usuarios as $user){
        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
            $usuarios_autenticado = true;
            $usuario_id = $user['id'];
            $usuario_perfil_id = $user['perfil_id'];
        }  
    }

    if($usuarios_autenticado) {
        //indice de autenticacao
        echo 'Usuário autenticado';
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $usuario_perfil_id;
        header('Location: home.php');
    } else {
        $_SESSION['autenticado'] = 'NAO';
        header('Location: index.php?login=erro ');
    }
    //verificar o valor dos indices nas outras páginas para sabermos se podemos exibir ou não


?>