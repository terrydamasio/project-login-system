<?php

    class Pessoa {
        const nome = "Terry"; //criar constante

        public function exibirNome() {
            echo self::nome; //referenciar a constante dentro do escopo da função na classe Pessoa
        }
    }

    class Terry extends Pessoa {
        const nome = "Damasio";

        public function exibirNome() {
            echo parent::nome; //referenciar a constante dentro do escopo da função na classe pai (Pessoa)
        }
    }

    $terry = new Terry();
    $terry->exibirNome();

?>