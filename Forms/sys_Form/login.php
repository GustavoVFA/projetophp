<?php

$senha = "3713";
$email = "gustavo@gmail.com";


$senhaInput = $_GET['senha'];
$emailInput = $_GET['email'];

if($senha == $senhaInput && $email == $emailInput){
    echo "bem Vindo";
}else{
    echo "Usuario ou senha Incorretos";
}

?>