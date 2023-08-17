<?php

$con = mysqli_connect("localhost", "root", "", "db_2HPW2");

if (mysqli_connect_errno()) {

    echo "Erro: ", mysqli_connect_error();
} else {

    $sql = "SELECT Nome, Sobrenome, Idade From Pessoa";

    $resultado = mysqli_query($con, $sql);

    echo "<h2>Pessoa</h2>";

    while ($pessoa = mysqli_fetch_array($resultado)) {

        echo "Nome: " . $pessoa['Nome'] . " " . $pessoa['Sobrenome'] . " - " . $pessoa['Idade']. " Anos". "<br><br>";
    }
    mysqli_close($con);
}
