<?php

  session_start(); 

  //montagem do texto
  $titulo = str_replace('#', '/', $_POST['titulo']);
  $categoria = str_replace('#', '/', $_POST['categoria']);
  $descricao = str_replace('#', '/', $_POST['descricao']);

  $texto = $_SESSION['id'] . ' # ' . $titulo . ' # ' . $categoria . ' # ' . $descricao . PHP_EOL;

  //abrir arquivo
  $arquivo = fopen('arquivo.hd', 'a');
  //escrever no arquivo
  fwrite($arquivo, $texto);
  //fechar arquivo
  fclose($arquivo);
  //echo $texto;

  header('Location: abrir_chamado.php');
?>