<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta chaeset="UTF-8">
<title>04_furmulario</title>
</head>
<body>
    <h1>Compra de Ingressos</h1>
    <form action="logica.php"method="POST">
        <lebel for="">Nome do cliente:</lebel>
        <br>
        <input type="text"name="nome" >
        <br><br>
        <lebel for="">Filme:</lebel>
        <br>
        <input type="text"name="filme">
        <br><br>
        <lebel for="">Quantidade de ingressos:</lebel>
        <br>
        <input type="number" name="altura">
        <br><br>

        <input type="radio"name="tipo"value="inteira">
        <label for="">Inteira</label>
        <br>
        <input type="radio"name="tipo"value="meia">
        <label for="">Meia</label>
        <br>
        <button type="submit">Comprar Ingressos</button>
</body>
</html>