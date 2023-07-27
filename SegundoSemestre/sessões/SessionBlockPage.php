<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bloqueando paginas por Sessões</title>
    <?php
        session_start();

        $_SESSION['nome'] = $_POST['nome'];

        $_SESSION['senha'] = $_POST['senha'];
    ?>
</head>
<body>
    <b>Funcionario: </b><?php echo $_SESSION['nome']; ?>, logado com sucesso. <br>

    <b>Dara de Conexão: </b><?php echo date("d/m/y");?> <br>

    <b>Hora da Conexão: </b><?php echo date("h:i:s") ?> <br>


    <a href="sessionVerifica.php">Area do administrador</a>
</body>
</html>