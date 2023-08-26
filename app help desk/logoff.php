<?php
    session_start();

    session_destroy();
    header('Location: index.php');
    //destruir a sessão e forçar um direcionamento

   
?>