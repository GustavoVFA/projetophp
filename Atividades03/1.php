<?php


/*Entre com os dados de 10 alunos de uma classe, recebendo as informações como 
nome e uma nota do aluno. Armazene estes dados em um vetor. Ao final do 
programa mostrar a média de nota da classe, e o nome do aluno que obteve maior 
nota. */
$nomes_notas = array(
    "José" => 8,
    "Pedro"  => 7,
    "Marcos" => 7,
    "Gustavo" => 7,
    "Lucas" => 7,
    "Jerson" => 7,
    "Fabio" => 7,
    "Vitor" => 7,
    "João" => 10,
    "Jonas" => 8
);
$notas = array_values($nomes_notas);
$soma=0;


function media($notas,$soma){
    for($i=0;$i<10;$i++){
        $soma = $soma + $notas[$i];
    }
    echo "Media: ".$media = $soma/$i;
}

function mNota($notas, $nomes_notas){
    $mnota = 0;
    $cont=0;
    for($i =0;$i<10;$i++){
        if($mnota < $notas[$i]){
            $mnota = $notas[$i];
            $cont++;
        }
    }
    $nomes = array_search($mnota, $nomes_notas);
     echo "<br/> Maior Nota: ".$mnota;
     echo "<br/> Aluno com Maior Nota: ".$nomes;
}

media($notas, $soma);
mNota($notas, $nomes_notas);

