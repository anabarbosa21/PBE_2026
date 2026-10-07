```html
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Compra de Ingressos</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #4A147A, #8E44AD);
            color: white;
            min-height: 100vh;
        }

        header {
            text-align: center;
            padding: 25px;
        }

        header img {
            width: 180px;
        }

        header h1 {
            margin-top: 10px;
            font-size: 30px;
        }

        .container {
            width: 90%;
            max-width: 500px;
            margin: 20px auto;
            background-color: white;
            color: #333;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 5px 20px #0005;
        }

        .container h2 {
            text-align: center;
            color: #4A147A;
            margin-bottom: 25px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-top: 15px;
        }

        input[type="text"],
        input[type="number"],
        input[type="date"],
        input[type="time"] {
            width: 100%;
            padding: 12px;
            margin-top: 7px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        .tipo {
            margin-top: 15px;
        }

        .tipo label {
            display: inline;
            margin-right: 15px;
        }

        button {
            width: 100%;
            padding: 14px;
            margin-top: 25px;
            border: none;
            border-radius: 10px;
            background-color: #4A147A;
            color: white;
            font-size: 17px;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background-color: #7025a8;
        }

        .observacao {
            text-align: center;
            margin-top: 15px;
            font-size: 13px;
            color: #666;
        }

        .eventos {
            width: 90%;
            max-width: 1000px;
            margin: 40px auto;
            text-align: center;
        }

        .eventos h2 {
            margin-bottom: 20px;
        }

        .galeria {
            display: flex;
            justify-content: center;
            gap: 15px;
            flex-wrap: wrap;
        }

        .galeria img {
            width: 150px;
            height: 100px;
            object-fit: cover;
            border-radius: 12px;
            box-shadow: 0 4px 10px #0005;
        }

        footer {
            text-align: center;
            padding: 25px;
            margin-top: 30px;
            background-color: #321052;
        }
    </style>
</head>

<body>

    <header>
        <img src="https://mir-s3-cdn-cf.behance.net/project_modules/fs/b963f9116104893.605b4f4ea67b6.png"
             alt="Logo do evento">

        <h1>🎉 Compra de Ingressos</h1>
    </header>


    <div class="container">

        <h2>Ingresso para Eventos</h2>

        <form action="logica.php" method="POST">

            <label>Nome do cliente:</label>
            <input type="text" name="nome_cliente" required>


            <label>Nome do evento:</label>
            <input type="text" name="nome_evento" required>


            <label>Quantidade:</label>
            <input type="number" name="qtd" min="1" required>


            <label>Data:</label>
            <input type="date" name="data" required>


            <label>Horário:</label>
            <input type="time" name="horario" required>


            <div class="tipo">

                <label>Tipo de ingresso:</label>

                <br><br>

                <input type="radio" name="tipo" value="Inteira" required>
                <label>Inteira</label>

                <input type="radio" name="tipo" value="Meia">
                <label>Meia</label>

            </div>


            <button type="submit">
                🎟️ Comprar Ingresso
            </button>

            <p class="observacao">
                Valor do ingresso: R$ 45,00 por pessoa.
            </p>

        </form>

    </div>


    <section class="eventos">

        <h2>✨ Eventos em destaque</h2>

        <div class="galeria">

            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNM7kqKrCfKKWHX_DNQntktOkoxU2D_MugYdmtVME6Sg&s=10"
                 alt="Evento">

            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRB0T-_yxuW7PT-ycvVPj_Qyq1Ut77LsSW-BOdqozjT8Q&s=10"
                 alt="Evento">

            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRztarrgPaQItwWCIlEBa2fRcf99YgSgGJbWgaU4eHjcw&s=10"
                 alt="Evento">

            <img src="https://
```
```php
<?php

// Pegando os dados do formulário
$nome = $_POST["nome_cliente"];
$evento = $_POST["nome_evento"];
$quantidade = $_POST["qtd"];
$data = $_POST["data"];
$horario = $_POST["horario"];
$tipo = $_POST["tipo"];


// Preço dos ingressos
$preco_inteira = 45.00;
$preco_meia = 22.50;


// Verificando o tipo de ingresso
if ($tipo == "Inteira") {

    $preco = $preco_inteira;

} else {

    $preco = $preco_meia;

}


// Calculando o valor total
$total = $preco * $quantidade;


// Formatando os valores para aparecer em reais
$preco_formatado = number_format($preco, 2, ',', '.');
$total_formatado = number_format($total, 2, ',', '.');

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Compra Confirmada</title>

    <style>

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {

            font-family: Arial, sans-serif;

            background: linear-gradient(
                135deg,
                #4A147A,
                #8E44AD
            );

            color: #333;

            min-height: 100vh;

            display: flex;

            justify-content: center;

            align-items: center;

            padding: 20px;
        }


        .ingresso {

            background-color: white;

            width: 100%;

            max-width: 500px;

            padding: 35px;

            border-radius: 20px;

            box-shadow: 0 5px 25px #0005;
        }


        .logo {

            text-align: center;

            margin-bottom: 15px;
        }


        .logo img {

            width: 130px;
        }


        h1 {

            text-align: center;

            color: #4A147A;

            margin-bottom: 10px;
        }


        .confirmacao {

            text-align: center;

            color: #228B22;

            margin-bottom: 25px;
        }


        .dados {

            background-color: #f4eaff;

            padding: 20px;

            border-radius: 12px;

            border-left: 5px solid #4A147A;
        }


        .dados p {

            margin-bottom: 12px;

            font-size: 16px;
        }


        .dados p:last-child {

            margin-bottom: 0;
        }


        .total {

            margin-top: 25px;

            text-align: center;

            background-color: #4A147A;

            color: white;

            padding: 18px;

            border-radius: 12px;

            font-size: 24px;

            font-weight: bold;
        }


        .botao {

            display: block;

            text-align: center;

            margin-top: 20px;

            padding: 13px;

            background-color: #8E44AD;

            color: white;

            text-decoration: none;

            border-radius: 10px;

            font-weight: bold;
        }


        .botao:hover {

            background-color: #4A147A;
        }

    </style>

</head>


<body>


<div class="ingresso">


    <div class="logo">

        <img
            src="https://mir-s3-cdn-cf.behance.net/project_modules/fs/b963f9116104893.605b4f4ea67b6.png"
            alt="Logo do evento"
        >

    </div>


    <h1>🎟️ Compra Confirmada!</h1>


    <p class="confirmacao">
        Seu ingresso foi registrado com sucesso.
    </p>


    <div class="dados">

        <p>
            <strong>👤 Cliente:</strong>
            <?php echo $nome; ?>
        </p>


        <p>
            <strong>🎉 Evento:</strong>
            <?php echo $evento; ?>
        </p>


        <p>
            <strong>🎫 Tipo:</strong>
            <?php echo $tipo; ?>
        </p>


        <p>
            <strong>🔢 Quantidade:</strong>
            <?php echo $quantidade; ?>
        </p>


        <p>
            <strong>📅 Data:</strong>
            <?php echo $data; ?>
        </p>


        <p>
            <strong>⏰ Horário:</strong>
            <?php echo $horario; ?>
        </p>


        <p>
            <strong>💵 Preço por ingresso:</strong>
            R$ <?php echo $preco_formatado; ?>
        </p>

    </div>


    <div class="total">

        Total da compra:
        <br>

        R$ <?php echo $total_formatado; ?>

    </div>


    <a href="index.html" class="botao">

        ← Comprar outro ingresso

    </a>


</div>


</body>

</html>
```
