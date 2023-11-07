<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula de formulário</title>

    <style>
        .container {
            border: 2px solid black;
            display: flex;
            flex-direction: column;
            margin: 10px auto;
            width: 300px;
            padding: 20px;
            align-items: center;
        }

        form {
            display: flex;
            align-items: center;
            flex-direction: column;
        }

        form input {
            width: 100px;
            padding: 10px;
            margin-top: 10px;
        }
    </style>
</head>


<body>
    <div class="container">

        <h1>APOSTA DOS CRIA</h1>
        <form action="ex5.php" method="post">
            <input type="text" name="time1" id="time1" placeholder="Time 1">
            <input type="number" name="gols1" id="gols1" placeholder="quant. de gols ">
            <h1>X</h1>
            <input type="text" name="time2" id="time2" placeholder="Time 2">
            <input type="number" name="gols2" id="gols2" placeholder="quant. de gols ">
            <input type="submit" value="Resultado">
            <input type="reset" value="Limpar">


        </form>
    </div>
</body>

</html>