<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifica Sessões</title>
    <?php
    
    session_start();

    if($_SESSION["nome"] != "master"){
        session_destroy();

        header("location:sessionblockPage.php");
    }
    
    ?>
</head>
<body>
    <b>Pagina Autorizada</b>
</body>
</html>