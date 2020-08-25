<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
    <?php
        # Ler o dia da semana (2 - 7) e mostrar se precisa ir ou não pra escola
        $d = isset($_GET["ds"]) ? $_GET["ds"] : 0;
        switch($d){
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
                echo "Dia de estudar";
                break;
            case 7:
            case 8:
                echo "Dia de descanso";
                break;
            default:
                echo "Dia da semana inválido";

        }
    ?>
    <a href="aula10a.html"> Voltar</a>
</body>
</html>
