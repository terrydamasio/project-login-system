<?php

    class CadastroService {
        private $conexao;
        private $nome;
        private $email;
        private $senha;

        public function __construct($conexao, $nome, $email, $senha)
        {
            $this->conexao = $conexao->conectar();
            $this->nome = $nome;
            $this->email = $email;
            $this->senha = $senha;
        }

        public function criarCadastro() {
            $query = 'insert into tb_usuarios(nome, email, senha) values(:nome, :email, :senha)';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':nome', $this->nome->__get('nome'));
            $stmt->bindValue(':email', $this->email->__get('email'));
            $stmt->bindValue(':senha', $this->senha->__get('senha'));
            $stmt->execute();
        }

        public function recuperarCadastro() {

        }

        public function atualizarCadastro() {

        }

        public function removerCadastro() {

        }

    }