<?php

class Conta{

public $titular;
public $numero;
public $saldo;
public $tipo;

function depositar($valor){
    $this->soudo = $true->saludo + $valor;
    echo "O saldo aumentou para $true->saludo ";
}

function sacar($valor){
    $this->soudo = $true->saludo - $valor;
    echo "O saldo resultou em $true->saludo ";
}

function consultarSaldo(){
    echo "O valor do saldo é de $true->saludo";
    }
}

$conta1 = new Conta();

$conta1->titular = "Ana";
$conta1->numero = 100;
$conta1->saldo = 34;
$conta1->tipo = "bancaria";

echo "titular:$conta1->titular <br>";
echo "numero:$conta1->numero <br>";
echo "saldo:$conta1->saldo <br>";
echo "tipo:$conta1->tipo <br>";

$conta2 = new Conta();

$conta2->titular = "Maria";
$conta2->numero = 200;
$conta2->saldo = 56;
$conta2->tipo = "bancaria";

echo "titular:$conta2->titular <br>";
echo "numero:$conta2->numero <br>";
echo "saldo:$conta2->saldo <br>";
echo "tipo:$conta2->tipo <br>";
