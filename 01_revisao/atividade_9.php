<?php

 $idade_pessoa = 16;
 $aconpanhada = true;

 if ($idade_pessoa >= 18){
    echo "pode entrar sozinha!🥳";
 }
 elseif ($idade_pessoa >=14
    && $idade_pessoa <=17
    && $aconpanhada  == true ){
        echo "Entrada liberada com suceso!!";
}
else{ 
    echo "Menor de 14 não podem entrar, mesmo aconpanhada😓 ";
}
?>