<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];


    // echo "A Sua idade é $idade entao sua classificação é: <br>";

    if (
        !empty($_POST['nome']) && isset($_POST['nome'])
        && !empty($_POST['idade']) && isset($_POST['idade'])
    ) {



        switch ($idade) {
            case 5:
            case 6:
            case 7:

                echo "Infantil A , $idade anos de Idade";
                break;
            case 8:
            case 9:
            case 10:

                echo  "Infantil B , $idade anos de Idade";
                break;
            case 11:
            case 12:
            case 13:

                echo  "Juvenil A , $idade anos de Idade";
                break;
            case 14:
            case 15:
            case 16:
            case 17:
                echo  "Juvenil B , $idade ano de Idade";
                break;

            default:

                if ($idade >= 18) {
                    echo  "Adulto , $idade anos de Idade";
                    break;
                } else {
                    echo "Não pode nadar";
                }
        }
    } else {
        echo "Preencha os dados";
        header("refresh:3,nad.php");
    }
    ?>
</body>

</html>