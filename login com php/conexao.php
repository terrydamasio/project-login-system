<?php
    class Conexao {
        private $host = "localhost";
        private $dbname = "login";
        private $user = "root";
        private $pass = "root";

        public function conectar() {

            try {
                $conexao = new PDO(
                    "mysql:host=$this->host;dbname=$this->dbname",
                    $this->user,
                    $this->pass
                );
                
                return $conexao;
                
            } catch(PDOException $e) {
                echo $e->getCode() . '<br>' . $e->getMessage();  
            }    
        }
    }
  