<?php

$nome = $_GET['nomeCad'];
$email = $_GET['emailCad'];
$dataNascimento = $_GET['dateCad'];
// $foto = $_GET[''];

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
</head>
<body>
    <div>
        <label for="">Nome</label><label for=""><?php echo $nome;  ?></label>
    </div>
</body>
</html>