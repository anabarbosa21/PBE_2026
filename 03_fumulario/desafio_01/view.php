<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta chaeset="UTF-8">
<title>DESSAFIO_01</title>
</head>
<body>
    <h1>Calculadora de Salario Liquido</h1>
    <form action="logica.php"method="POST">
        <lebel for="">Nome do funcionario:</lebel>
        <br>
        <input type="text"name="nome">
        <br><br>
        <lebel for="">Salario Bruto:</lebel>
        <br>
        <input type="number" name="salario">
        <br><br>
        <lebel for="">Horas Extras:</lebel>
        <br>
        <input type="number" name="horas_extra">
        <br><br>
        <lebel for="">Beneficios:</lebel>
        <br>
        <input type="number" name="baneficios">
        <br><br>
        <lebel for="">Descontos:</lebel>
        <br>
        <input type="number" name="desconto">
        <br><br>
        <button type="submit">Calcula Salario</button>
</body>
</html>