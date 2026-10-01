<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta chaeset="UTF-8">
<title>04_furmulario</title>
</head>
<body>
    <h1>Calcular Média do Aluno</h1>
    <form action="logica.php"method="POST">
        <lebel for="">Nome do aluno:</lebel>
        <br>
        <input type="text"name="nome">
        <br><br>
        <lebel for="">Nota 1:</lebel>
        <br>
        <input type="number"name="nota1">
        <br><br>
        <lebel for="">Nota 2:</lebel>
        <br>
        <input type="number" name="nota2">
        <br><br>
        <lebel for="">Nota 3:</lebel>
        <br>
        <input type="number" name="nota3">
        <br><br>
        <button type="submit">Calcular Média</button>
</body>
</html>