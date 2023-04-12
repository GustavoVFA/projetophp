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

 echo "<br/><br/>";

$Num = array(1,2,3,4,5);

foreach($Num as $valor){
    echo "Valor é $valor <br/>";
}
echo "<br/> <br/>";
$Num[0] = "Um";
$Num[1] = "Dois";
$Num[2] = "Três";
$Num[3] = "Quatro";
$Num[4] = "Cinco";

foreach($Num as $valor){
    echo "Valor é $valor <br/>";
}
?>