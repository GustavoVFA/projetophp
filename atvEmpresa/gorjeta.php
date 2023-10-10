<?php


Class Gorjeta{

    public $conta;
    private $gorjeta;
    private $total;

    function setGorjeta($gorjeta){
        $this->gorjeta = $gorjeta;
    }

    function getGorjeta(){

    }

    function calcularGorjeta($gorjeta){
        switch ($gorjeta) {
            case '10%':
                $Total = $gorjeta * 1.10;
                $gorjeta = $gorjeta * 0.10;
                break;
            case '8%':
                $Total = $gorjeta * 1.10;
                $gorjeta = $gorjeta * 0.10;
                break;
            case '5%':
                $Total = $gorjeta * 1.10;
                $gorjeta = $gorjeta * 0.10;
                break;
            case '2%':
                $Total = $gorjeta * 1.10;
                $gorjeta = $gorjeta * 0.10;
                break;
            
        }
    }
};