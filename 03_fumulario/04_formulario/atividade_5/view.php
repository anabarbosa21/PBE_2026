<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta chaeset="UTF-8">
<title>04_furmulario</title>
</head>
<body>
    <h1>Calular IMC</h1>
    <form action="logica.php"method="POST">
        <lebel for="">Nome:</lebel>
        <br>
        <input type="text"name="nome" >
        <br><br>
        <lebel for="">Peso em kg:</lebel>
        <br>
        <input type="number"name="peso" step = "0.01">
        <br><br>
        <lebel for="">Altura em metros:</lebel>
        <br>
        <input type="number" name="altura" step = "0.01">
        <br><br>
        <button type="submit">Calcular</button>
</body>