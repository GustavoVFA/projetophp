<?php 

$nome1 = "maria";
$nome2 = "joao";
$nome3 = "pedro";
$nome4 = "paulo";
$nome5 = "Lucas";

echo "$nome1, $nome2, $nome3, $nome4, $nome5";

?>

<p>Exemplo de declaração de variavel</p>

<?php

$nome = array("Maria","joao","Pedro","Paulo","Lucas");

echo "Os nomes no array <br/>";

foreach($nome as $nomes) {
    echo "<br/>".$nomes;
}

?>