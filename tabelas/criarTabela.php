<?php

$con = mysqli_connect("localhost", "root", "", "db_2HPW2");

$sql = "CREATE TABLE Pessoa(nome CHAR(30),sobrenome CHAR(30), idade INT)";

if (mysqli_query($con, $sql)) {

    echo "Tabela Criadada com sucesso!!";
} else {

    echo "Erro" . mysqli_error($con);
}

mysqli_close($con);
