<?php

$con = mysqli_connect("localhost", "root");

if(mysqli_connect_errno($con)){

    echo "<br> Erro ao conectar com a base de dados";

    mysqli_connect_error();

}else{
    $sql = "Create Database db_3HPW3";
    if (mysqli_query($con, $sql)){
        echo "<br> Base de dados criada com sucesso!!";
    }else{
        echo "<br> Erro: ".mysqli_error($con);
    }
    mysqli_close($con);
}

?>