<?php

$notasAlunos = [
    "Ana" => 8.5
    "Bruno" =>7.0
    "Carlos" =>9.2
    "Diana" =>6.8
    "Roberto" => 7.0
    "Eduardo" =>8
];
$somaAlunos = 0;
$totalAlunos = cont($notasAlunos);

foreach($notasAlunos as $nome => $nota){

    $notaformada = number_format($nota, 1, '.','');
    echo "O aluno $nome tirou nota $notaFormada.<br>";

    $somaNotas += $nota;
}

$mediaTurma = $somaNotas / $totalAlunos;
$mediaFormada = number_format($mediaTurma, 2,'.','');

echo "<br>Ao final exiba a media da turma media $mediaFormada.";
?>