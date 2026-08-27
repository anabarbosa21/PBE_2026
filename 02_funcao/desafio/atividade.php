<?php
require_once "funcao.php";

$resultado = calcularPedido("Teclado",100,10,5,7);
echo "nome:".$resultado["NomeProduto"]."<br>";
echo "SubTotal".$resultado[ 'SubTotal']."<br>";
echo "Desconto".$resultado['Desconto']."<br>";
echo "Total".$resultado['TotalFinal']."<br>";

$totalcomfrete = caucularcomfrete($resultado['TotalFinal']);
echo "Total com Frete".$totalcomfrete;


?>