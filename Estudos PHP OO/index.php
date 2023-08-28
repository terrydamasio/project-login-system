<?php 

    class Login {
        private $email;
        private $senha;

        //capturar valor
        public function getEmail() {
            return $this->email;
        }

        //como precisamos setar um valor, passamos ele por parametro
        public function setEmail($e) {
            $this->email = $e;
        }

        public function getSenha() {
            return $this->senha;
        }

        public function setSenha($s) {
            $this->senha = $s;
        }

        public function logar() {
            if($this->email == 'teste@teste.com.br' && $this->senha == '123') {
                echo 'logado com sucesso!  <br>';
            } else {
                echo 'Login inválido  <br>';
            }
        }

    }

    $logar = new Login();
    $logar->setEmail("terry@teste.com.br");
    $logar->logar();

    echo $logar->getEmail();

?>  