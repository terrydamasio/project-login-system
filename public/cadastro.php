<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Cadastro</title>
</head>
<body> 
    <div class="container">
        <div class="form-image">
            <img src="assets/img//undraw_shopping_re_3wst.svg" alt="">
        </div>
        <div class="form">
            <form action="cadastro.controller.php" method="post">
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastre-se</h1>
                    </div>
                    <div class="login-button">
                        <a href="index.php">Já tenho um cadastro</a>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="firstname">Nome Completo</label>
                        <input id="firstname" type="text" name="nome" placeholder="Digite seu primeiro nome" required>
                    </div>

                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" placeholder="Digite seu e-mail" required>
                    </div>

                    <div class="input-box">
                        <label for="password">Senha</label>
                        <input id="password" type="password" name="senha" placeholder="Digite sua senha" required>
                    </div>
                    <?php if(isset($_GET['cadastro']) && $_GET['cadastro'] == 'erro') { ?>
                        <p style="color: red;">Preencha todos os campos para efetuar o cadastro.</p>
                    <?php } else if(isset($_GET['cadastro']) && $_GET['cadastro'] == 'sucesso') { ?>
                        <p style="color: green;">Cadastrado com sucesso! Efetue o login.</p>
                    <?php } else if(isset($_GET['cadastro']) && $_GET['cadastro'] == 'erro2') { ?>
                        <p style="color: red;">Já existe um usuário cadastrado com este email!</p>
                    <?php } ?>
                </div>
                <div class="continue-button">
                    <button type="submit">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>