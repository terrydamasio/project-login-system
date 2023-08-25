<?php
    session_start();

    session_destroy();
    header('Location: index.php');


    //destruir a variável de sessão - session_destroy() > remove todos os indices dentro da superglobal $_SESSION
    //sessão será destruida e somente numa próxma requisição não teremos acesso as requisições
    //forçar um direcionamento


   
?>