<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta chaeset="UTF-8">
<title>04_furmulario</title>
</head>
<body>
    <h1>Resultado IMC</h1>
    <p><b>Nome: </b> <?= $nome ?> </p>
     <p><b>Peso: </b> <?= $peso ?> </p>
     <p><b>Altura: </b> <?= $altura ?> </p>
     <p><b>Resultado IMC: </b> <?= $imc ?> </p>

    <?php if($imc >= 18.5): ?>
       <p>Abaixo do peso</p>
    <?php elseif($imc >= 18.5 && $imc < 24.9 ): ?>
        <p>Peso normal</p>
    <?php elseif($imc >= 25 && $imc < 29.9 ): ?>
        <p>Sobrepeso</p>
        <?php else: ?>
            <p>Obesidade</p>
         <?php endif ?>
</body>
</html>