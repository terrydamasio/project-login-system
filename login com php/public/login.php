<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="login.controller.php" method="post">
        <p>
            <label for="">Email</label>
            <input type="email" name="email">
        </p>
        <p>
            <label for="">Senha</label>
            <input type="password" name="senha">
        </p>
        <p>
            <a href="index.php">Não tem um cadastro?</a>
        </p>
        <p>
            <button type="submit">Entrar</button>
        </p>
        <?php if(isset($_GET['login']) && $_GET['login'] == 'erro') { ?>
            <p style="color: red;">Preencha todos os campos para efetuar o login.</p>
        <?php } else if(isset($_GET['login']) && $_GET['login'] == 'erro2') { ?>
            <p style="color: red;">Usuarios e/ou senhas incorretos.</p>
        <?php } else if(isset($_GET['login']) && $_GET['login'] == 'erro3') { ?>
            <p style="color: red;">Faça login para acessar páginas protegidas</p>
        <?php } ?>
    </form>
</body>
</html>