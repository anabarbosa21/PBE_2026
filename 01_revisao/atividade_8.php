<?php
$num1 = 75;
$num2 = 25;
$operacao = "_";
switch($operacao){
    case "+":
        echo "Resultado: ". ($num1 + $num2);
        break;
    case "-":
        echo "Resultado: ". ($num1 - $num2);
        break;
    case "*":
        echo "Resultado: ". ($num1 * $num2);
        break;
    case "/":
        if ($num2 == 0){
            echo "ERRO!";
            break;
        }
        echo "Resultado: ". ($num1 / $num2);
        break;
    default:
        echo "operaçao em valida";
        break;
}     
?>