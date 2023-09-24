<?php
    //mysql:host=<host_name>;dbname=<nome_database>; user; pass  
    class Conexao {
        private $host = 'localhost';
        private $dbname = 'teste_pdo';
        private $user = 'root';
        private $pass = '';

        public function conectar() {
            //if(!empty($_POST['usuario']) && !empty($_POST['senha'])) {
                try {
                    $conexao = new PDO(
                        "mysql:host=$this->host;dbname=$this->dbname",
                        $this->user, 
                        $this->pass);
                    
                    return $conexao;

                } catch (PDOException $e) {
                    echo 'Erro: ' . $e->getCode(). '<br>' . 'Mensagem: ' . $e->getMessage();
                }
            //}
        }

        public function inserir() {
            $conexao = $this->conectar();

            $query = "insert into tb_usuarios(nome, email, senha) values(:nome, :email, :senha)";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(':nome', $_POST['usuario']);
            $stmt->bindValue(':email', $_POST['email']);
            $stmt->bindValue(':senha', $_POST['senha']);
            $stmt->execute();
        }
    }

    $conexao = new Conexao();
    $conexao->conectar();
    $conexao->inserir();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  
    <h2>Cadastro</h2>
    <form action="index.php" method="post">
        <input type="text" placeholder="usuario" name="usuario">
        <input type="text" placeholder="email" name="email">
        <input type="password" placeholder="senha" name="senha">
        <button type="submit">Entrar</button>
    </form>
    
</body>
</html>