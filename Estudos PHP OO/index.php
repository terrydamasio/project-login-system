<?php

    class Pedido {
        public $numero;
        public $cliente;
    }

    class Cliente {
        public $nome;
        public $endereco;
    }

    $cliente = new Cliente();
    $cliente->nome = "Terry Damasio Santos";
    $cliente->endereco = "Rua xxx, 332 - Recife";

    $pedido = new Pedido();
    $pedido->numero = "123";
    $pedido->cliente = $cliente;

    $dados = [
        'numero' => $pedido->numero,
        'nome_cliente' => $pedido->cliente->nome,
        'endereco_clietne' => $pedido->cliente->endereco
    ];

    var_dump($dados);




?>