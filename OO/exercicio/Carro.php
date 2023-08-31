<?php

Class Carro{
    var $cor;
    var $ano;
    var $numeroPortas;
    var $peso;
    var $vrum = 0;
    
    
    function InformaCor(){
        echo "Cor: ". $this->cor. "</br>";
    }


    function Acelerar(){
        $this->vrum ++;
    }
    
    function mostrar(){
        echo "Vrum ". $this->vrum. "</br>";
    }
}

