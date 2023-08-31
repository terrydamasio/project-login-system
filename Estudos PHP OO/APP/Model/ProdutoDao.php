<?php

    namespace App\Model;

    class ProdutoDao {
        
        public function create(Produto $p) {

            $query = 'INSERT INTO produtos(id, nome, descricao) VALUES (?, ?, ?)';
            
            $stmt = Conexao::getConn()->prepare($query);
            $stmt->bindValue(1, $p->getId());
            $stmt->bindValue(2, $p->getNome());
            $stmt->bindValue(3, $p->getDescricao());
            
            $stmt->execute();
        }


        public function read() {
            
        }

        public function update() {

        }

        public function delete() {

        }
    }


?>