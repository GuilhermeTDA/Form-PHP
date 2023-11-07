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
            width: 400px;
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

        <h1>Nadador e sua categoria</h1>
        <form action="ex6.php" method="post">
            <input type="text" name="nome" id="nome" placeholder="Digite o nome">
            <input type="number" name="idade" id="idade" placeholder="Digite a idade">
           
            <input type="submit" value="Resultado">
            <input type="reset" value="Limpar">


        </form>
    </div>
</body>

</html>