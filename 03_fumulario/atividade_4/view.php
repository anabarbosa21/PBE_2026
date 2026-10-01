<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta chaeset="UTF-8">
<title>atividade_3</title>
</head>
<body>
    <h1>Numero</h1>
    <form action="logica.php"method="POST">
        <lebel for="">Número 1:</lebel>
        <input type="number"name="numero">
        <br><br>
         <lebel for="">Número 2:</lebel>
         <input type="number"name="numero2" required>
        <br><br>
        <select name="operacao" required>
            <option value="">Selecione a operação</option>
            <option value="">Soma</option>
            <option value="">Subitração</option>
            <button type="submit">mutiplicação</button>
            <button type="submit">divisão</button>
 
         <button type="reset">Linpar</button>
    </form>
</body>
</html>