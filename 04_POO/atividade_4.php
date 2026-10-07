<?php

class Pedido{

public $numero;
public $clinte;
public $valor;
public $status;

function adicionarItem($valor){
    if($this->status == "Aguerdando");
        $this->valor = $this->valor + $valor;
    }else{
        echo "Não é posssivel adicionar itens.
        O pedido está $this->status <br>";
    }
}

function cancelar(){
    $this->status = "Cancelado";
    echo "Status alterado para  $this->status <br>"
}

function finalizar(){
    $this->status = "Finalizado";
    echo "Status alterado para  $this->status <br>"
}

function exibirResumo(){
    echo "Número $this->numero <br> ";
    echo "cliente $this->cliente <br> ";
    echo "valor $this->valor <br> ";
    echo "status $this->status <br> ";
}

$pedido1 = new Pedido();
$pedido1 ->numero = 1001;
$pedido1 ->clinte = "Ana";
$pedido1 ->valor = 0;
$pedido1 ->status = "Aguardando";

$pedido1->exibirResumo();
$pedido1->adicionarItem(50);
$pedido1->adicionarItem(30)
$pedido1->exibirResumo();
$pedido1->finalizar();
$pedido1->exibirResumo();
$pedido1->adicionarItem(20);

echo "<hr>"

$pedido2 = new Pedido();
$pedido2 ->numero = 1002;
$pedido2 ->clinte = "Maria";
$pedido2 ->valor = 0;
$pedido2 ->status = "Aguardando";

$pedido1->exibirResumo();
$pedido1->adicionarItem(100);
$pedido1->adicionarItem(75)
$pedido1->exibirResumo();
$pedido1->finalizar();
$pedido1->exibirResumo();
$pedido1->adicionarItem(50);

?>