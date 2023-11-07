<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabelinha</title>
</head>

<body>
    <h1>RIFA DO DIGGO</h1>
    <table border="2">
        <?php

        for ($i = 1; $i <= 999; $i++) {

            echo "<tr>
            <td>
                <h3> Nº $i </h3>
                <h3> Nome: </h3>
                <h3> Valor R$2,00 </h3>
            </td>
            <td>
                <h1>Ação entre amigos </h1>
                <h2>Prêmio; Som JBL</h2>
                <h2>Data: 10/12</h2>
                <h2>Valor R$2,00</h2>
                <h2>Nº $i</h2>
            </td>
        </tr>";
        }
        ?>
    </table>
</body>

</html>