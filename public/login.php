<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="form-image">
            <img src="assets/img//undraw_shopping_re_3wst.svg" alt="">
        </div>
        <div class="form">
            <form action="login.controller.php" method="post">
                <div class="form-header">
                    <div class="title">
                        <h1>Login</h1>
                    </div>
                    <div class="login-button">
                        <a href="index.php">Quero me cadastrar</a>
                    </div>
                </div>

                <div class="input-group">

                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" placeholder="Digite seu e-mail" required>
                    </div>

                    <div class="input-box">
                        <label for="password">Senha</label>
                        <input id="password" type="password" name="senha" placeholder="Digite sua senha" required>
                    </div>

                    <?php if(isset($_GET['login']) && $_GET['login'] == 'erro') { ?>
                        <p style="color: red;">Preencha todos os campos para efetuar o login.</p>
                    <?php } else if(isset($_GET['login']) && $_GET['login'] == 'erro2') { ?>
                        <p style="color: red;">Usuarios e/ou senhas incorretos.</p>
                    <?php } else if(isset($_GET['login']) && $_GET['login'] == 'erro3') { ?>
                        <p style="color: red;">Faça login para acessar páginas protegidas</p>
                    <?php } ?>
                </div>
                <div class="continue-button">
                    <button type="submit">Entrar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>