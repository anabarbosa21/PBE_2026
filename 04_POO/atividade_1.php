<?php

class Celular{

public $marca;
public $modelo;
public $cor;
public $bateria;
public $ligado;

function ligar(){
    $this->ligado = true;
    echo "O celular foi ligado";
}

function desligar(){
    $this-> desligado = false;
    echo "O celular foi desligado";
}

function user($consumo){
    $this-> bateria = $this-> bateria - $consumir;
    if($this-> bateria < 0){
       $this-> bateria = 0 ;
    }
    echo "A bateria foi consumida em $consumir <br>";
    echo "Sobrando um total de $this-> bateria ";
}

function carregar($carga){
    $this->bateria = $this->bateria - $carga;
    if($this->bateria > 100){
       $this->bateria = 100 ;
    }
    echo "A bateria foi consumida em $carga <br>";
    echo "Sobrando um total de $this->bateria ";
    }
}

$celular1 = new Celular();

$celular1->marca = "iPhone";
$celular1->modelo = "iPhone 17";
$celular1->cor = "vinho";
$celular1->bateria = "30";
$celular1->ligado = true;

echo "marca:$celular1->marca <br>";
echo "modelo:$celular1->modelo <br>";
echo "cor:$celular1->cor <br>";
echo "bateria:$celular1->bateria <br>";
echo "ligodo:$celular1->ligado <br>";

$celular1->carregar(87);
$celular1->desligar();

$celular2 = new Celular();

$celular2->marca = "Motorola";
$celular2->modelo = "Moto G";
$celular2->cor = "preto";
$celular2->bateria = "86";
$celular2->ligado = false;

echo "marca:$celular2->marca <br>";
echo "modelo:$celular2->modelo <br>";
echo "cor:$celular2->bateria <br>";
echo "ligodo:$celular2->ligado <br>";

$celular2->carregar(30);
$celular2->desligar();

?>
















