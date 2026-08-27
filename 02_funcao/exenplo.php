<?php

$frequencia1 = 90;
$media1 = 9;

echo "Maria -";
if ($frequencia1 <= 75){
    echo "Reprovado por falta";
}
elseif ($media1 >= 7){
    echo "Aprovado";
}
else if ($media1 >= 5){
    echo "Recuperação";
}
else{
    echo "Reprovado";
}

echo"<br>";
$frequencia2 = 90;
$media2 = 9;

echo "Ana -";
if ($frequencia2 <= 75){
    echo "Reprovado por falta";
}
elseif ($media2 >= 7){
    echo "Aprovado";
}
else if ($media2 >= 5){
    echo "Recuperação";
}
else{
    echo "Reprovado";
}
?>

