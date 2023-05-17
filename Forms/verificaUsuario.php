<?php

$email_usu = $_POST['email'];
$senha_usu = $_POST['senha'];


if($nome_usu == 'admin@admin.com' && $senha_usu == 'admin'){
    echo "Bem vindo";
}else{
    echo "Acesso Negado";
}
?>
