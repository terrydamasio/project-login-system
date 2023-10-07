<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h1>Cadastro</h1>
    <form action="cadastro.controller.php?acao=cadastrar" method="post">
        <p>
            <label for="">Nome</label>
            <input type="text" name="nome">
        </p>
        <p>
            <label for="">Email</label>
            <input type="email" name="email">
        </p>
        <p>
            <label for="">Senha</label>
            <input type="password" name="senha">
        </p>
        <p>
            <a href="login.php">Já tem um cadastro?</a>
        </p>
        <p>
            <button type="submit">Cadastrar</button>
        </p>
        <?php if(isset($_GET['cadastro']) && $_GET['cadastro'] == 'erro') { ?>
            <p style="color: red;">Preencha todos os campos para efetuar o cadastro.</p>
        <?php } else if(isset($_GET['cadastro']) && $_GET['cadastro'] == 'sucesso') { ?>
            <p style="color: green;">Cadastro efetuado com sucesso!</p>
        <?php } ?>
    </form>
</body>
</html>