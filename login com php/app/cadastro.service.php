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
            try {
                $query = 'insert into tb_usuarios(nome, email, senha) values(:nome, :email, :senha)';
                $stmt = $this->conexao->prepare($query);
                $stmt->bindValue(':nome', $this->cadastro->__get('nome'));
                $stmt->bindValue(':email', $this->cadastro->__get('email'));
                $stmt->bindValue(':senha', $this->cadastro->__get('senha'));
                $stmt->execute();
            } catch(Exception $e) {
                echo $e->getCode() . '<br>' . $e->getMessage();
            }
        }

        public function recuperarCadastro() { //read
            try {
                $query = 'select * from tb_usuarios where email = :emal and senha = :senha';
                $stmt = $this->conexao->prepare($query);
                $stmt->bindValue(':email', $this->cadastro->__get('email'));
                $stmt->bindValue(':senha', $this->cadastro->__get('senha'));
                $stmt->execute();
                return $stmt;
            } catch(Exception $e) {
                echo $e->getCode() . '<br>' . $e->getMessage();
            }
        }

        public function atualizarCadastro() { //update
            
        }

        public function deletarCadastro() { //delete
            
        }

        public function validaCadastro() { //read
            try {
                $query = "select * from tb_usuarios where email = :email";
                $stmt = $this->conexao->prepare($query);
                $stmt->bindValue(':email', $this->cadastro->__get('email'));
                $stmt->execute();
                return $stmt;
            } catch(Exception $e) {
                echo $e->getCode() . '<br>' . $e->getMessage();
            }
        }

    }