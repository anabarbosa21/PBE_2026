<?php
$delta= ($b * $b)- (4 * $a *$c);
if ($delta <0){
    echo "nao existem raizes reais.";
}elseif ($delta == 0){
    $x =(-$b) /(2 * $a);
    echo "a inica raiz e:" . $x;
}else{
    $x1 = (-$b +sqrt($delta))/(2 * $a);
    $x2 = (-$b-sqrt($delta))/(2 * $a);

    echo "raiz 1: ".$x1 . "<br>;
    echo "raiz 2: ".$x2;

}

?>