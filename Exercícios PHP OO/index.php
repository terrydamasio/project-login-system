<?php 
    class Login {
        private $user = ['email' => 'terrydamasio.dev@gmail.com', 'senha' => '#Terrydamasio2021', 'username' => 'Terry Damasio'];
        private $email;
        private $senha;
        
        public function __construct($email, $senha) {
            $this->setEmail($email);
            $this->setSenha($senha);
        }

        public function getEmail() {
            return $this->email;
        }
        
        public function setEmail($email) {
            $this->email = $email;
        }

        public function getSenha() {
            return $this->senha;
        }
        
        public function setSenha($senha) {
            $this->senha = $senha;
        }
        
        public function verificaLogin() {
            if($this->user['email'] == $this->email && $this->user['senha'] == $this->senha) {
                echo 'Logado com sucesso! ' .'<hr>'. 'Seu login: ' .'<br>'. 'Email: ' . $this->getEmail() .'<br>'. 'Senha: ' . $this->getSenha() .'<br>'. 'Username: ' . $this->user['username'];
            } else if ($this->user['email'] != $this->email && $this->user['senha'] == $this->senha){
                echo 'E-mail inválido. Tente novamente';
            } else if ($this->user['email'] == $this->email && $this->user['senha'] != $this->senha){
                echo 'Senha inválida. Tente novamente';
            } else {
                echo 'Login inválido. Tente novamente.';
            }
        }
    }

    $login = new Login('terrydamasio.dev@gmail.com', '#Terrydamasio2021');
    $login->verificaLogin();


?>