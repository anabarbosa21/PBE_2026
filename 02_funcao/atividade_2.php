<?php

function calcularPrecoFinal($preco,$quantidade,$desconto){
    $total = $preco * $quantidade;
    return $total - ($total * ($desconto/100));
}

$preco = 5;
$quantidade = 3;
$desconto = 10;

$resultado = calcularPrecoFinal($preco,$quantidade,$desconto);
echo "preço = $preco";
echo "<br>";
echo "quantidade = $quantidade";
echo "<br>";
echo "desconto = $desconto ";
?>