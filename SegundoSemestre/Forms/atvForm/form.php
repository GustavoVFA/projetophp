<?php
   

    $Raio = $_POST['raio'];
    $Altura= $_POST['altura'];


    $Volume = 3.14159 * ($Raio**2) * $Altura;

    echo"Fórmula = 3.14159 * R^2 * Altura <br/>
         Resultado = $Volume"


?>