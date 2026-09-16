<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta chaeset="UTF-8">
<title>04_furmulario</title>
</head>
<body>
    <h1>Resultado do Aluno</h1>
    <p><b>Nome: </b> <?= $nome ?> </p>
     <p><b>Nota 1: </b> <?= $nota1 ?> </p>
     <p><b>Nota 2: </b> <?= $nota2 ?> </p>
     <p><b>Nota 3: </b> <?= $nota3?> </p>
     <p><b>Média: </b> <?= $media ?> </p>

    <?php if($media >= 7): ?>
       <p>Aprovado</p>
        <?php else: ?>
       <p>Reprovado</p>
    <?php endif ?>

    <?php if($media == 10): ?>
         <p>Voce Atirgiu a nota máxima!!</p>
    <?php endif ?>
</body>
</html>