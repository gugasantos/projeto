<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form >
        <h1>Bem vindo <?php echo $_SESSION["usuario"];?></h1>
        <h2>Não temos nada por aqui...ainda</h2>
        <a href="sair.php">SAIR</a>

    </form>
</body>
</html>