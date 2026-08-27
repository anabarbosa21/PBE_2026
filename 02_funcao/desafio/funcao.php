<?php
function calcularPedido($nome,$preco,$quantidade,$desconto = 0,$inposto = 0){
    $subtotal = $preco * $quantidade;
    $desconto =  $subtotal * ($desconto/100);
    $totalcomDesconto = $subtotal - $desconto;
    $inposto =  $totalcomDesconto * ($inposto/100);
    $totalFinal = $totalcomDesconto + $inposto;

    return[
        "NomeProduto" => $nome,
        "SubTotal" => $subtotal,
        "Desconto" => $desconto,
        "Inposto" => $inposto,
        "TotalFinal" => $totalFinal,
    ];
} 

function caucularcomfrete($valortotal){
    $frete = $valortotal * (10/100);
    $totalcomfrete =  $frete  +  $valortotal;
        return $totalcomfrete;
}


?>