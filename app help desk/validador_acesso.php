<?php
  session_start();

  //testando variáveis de acesso e verificando se página pode ser acessada ou não
  if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM') {
    header('Location: index.php?login=erroAcesso');
  }
?>