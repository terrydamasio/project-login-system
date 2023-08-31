<?php

    namespace App\Model;

    //conexão com banco de dados
    class Conexao {
        private static $instance;

        //verificar se já existe uma instancia da conexão
        public static function getConn() {
            if(!isset(self::$instance)) {
                self::$instance = new \PDO('mysql:host=localhost;dbname=pdo;charset=utf8', 'root', '');
            } else {
                return self::$instance;
            }
        }


    }



?>