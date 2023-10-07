<?php

    class CadastroService {
        private $conexao;
        private $cadastro;

        public function __construct(Conexao $conexao, Cadastro $cadastro)
        {   
            $this->conexao = $conexao->conectar();
            $this->cadastro = $cadastro;
        }

        public function cadastrar() { //create
            $query = 'insert into tb_usuarios(nome, email, senha) values(:nome, :email, :senha)';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':nome', $this->cadastro->__get('nome'));
            $stmt->bindValue(':email', $this->cadastro->__get('email'));
            $stmt->bindValue(':senha', $this->cadastro->__get('senha'));
            $stmt->execute();
        }

        public function recuperarCadastro() { //read
            $query = 'select * from tb_usuarios';
            $stmt = $this->conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }

        public function atualizarCadastro() { //update

        }

        public function deletarCadastro() { //delete

        }

    }