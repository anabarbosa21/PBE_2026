<?php

function VerificarMaioridade($idade){

    if ($idade < 18){
        return "Maior de idade";
    }else{
        return "Menor de idade";
    }
}
$idade1 = 15;
$idade2 = 18;
$idade3 = 25;

$resuntado = VerificarMaioridade ($idade1);
    echo "A idade $idade1 é $resuntado <br>";

$resuntado = VerificarMaioridade ($idade2);
    echo "A idade $idade2 é $resuntado <br>";

$resuntado = VerificarMaioridade ($idade3);
    echo "A idade $idade3 é $resuntado <br>";
?>