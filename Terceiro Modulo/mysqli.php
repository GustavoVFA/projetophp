<?php

//criando coonexão com o banco de dados

$con = mysqli_connect("localhost", "GustavoVFA", "g!T01-@rU6E2qG3K", "db_exemplo");

//Checando conexão

if(mysqli_connect_errno()){

    echo "Erro ao conectar com a base de dados: ".mysqli_connect_error();
}else{
    echo "Conexão Aberta";
    mysqli_close($con);
    echo "<br> Conexão fechada";
}



// Fechando Conexão

//select codigo +1 from (nome tabela) order by codigo desc


?>