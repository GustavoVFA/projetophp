<?php

//criando coonexão com o banco de dados

$con = mysqli_connect("localhost", "GustavoVFA", "g!T01-@rU6E2qG3K");

//Checando conexão

if(mysqli_connect_errno()){

    echo "Erro ao conectar com a base de dados: ".mysqli_connect_error();
}else{
    echo "Conexão Aberta";
}
?>