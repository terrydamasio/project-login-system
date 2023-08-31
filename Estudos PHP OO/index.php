<?php

    require_once 'vendor/autoload.php';

    $produto = new \App\Model\Produto();
    $produto->setNome('Notebook Dell');
    $produto->setDescricao('I5, 4G');

    $produtoDao = new \App\Model\ProdutoDao();
    $produtoDao->create($produto);

    
?>