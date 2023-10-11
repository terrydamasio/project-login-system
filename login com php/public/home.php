<?php 
    session_start();
    if(empty($_SESSION)) {
        header('Location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Sucesso!</h1>
    <?php 
        $cadastroService = new CadastroService();
        $logout = $cadastroService->logout();


        echo "Seja bem vindo, " . $_SESSION['email'] . "!";
        print "<a href='$logout'>Sair</a>";
    ?>
    
</body>
</html>