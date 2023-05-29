<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessão de Usuario </title>
</head>
<body>
    <?php
    
    session_start();
    $_SESSION['nome'] = 'Supremo senhor sem massa';

    ?>
    <h3>Sessao de Usuario</h3>
    Bem Vindo, Caro <?php  echo $_SESSION['nome']; ?>

</body>
</html>
