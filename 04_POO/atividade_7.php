<?php

class ContaBancaria {
    public $titular;
    public $saldo;

    public function __construct($titular, $saldo) {
        $this->titular = $titular;
        $this->saldo = $saldo;
    }
    public function depositar($valor) {
        $this->saldo += $valor;
    }


    public function sacar($valor) {
        $this->saldo -= $valor;
    }


    public function exibirSaldo() {
        echo "Titular: " . $this->titular . 
             " - Saldo atual: R$ " . number_format($this->saldo, 2, ',', '.');
    }
}

$conta1 = new ContaBancaria("Ana", 500);
$conta1->depositar(200);
$conta1->sacar(100);
$conta1->exibirSaldo();

echo "<hr>";

$conta2 = new ContaBancaria("Maria", 600);
$conta2->depositar(300);
$conta2->sacar(200);
$conta2->exibirSaldo();
?>