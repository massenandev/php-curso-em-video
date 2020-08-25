<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
    <?php
        $n = isset($_GET["num"]) ? $_GET["num"] : 0;
        $o = isset($_GET["oper"]) ? $_GET["oper"] : 1;
        switch ($o){
            case 1:
                $r = $n * 2;
                break;
            case 2:
                $r = $n * $n * $n;
                break;
            case 3:
                $r = sqrt($n); // ou $n * 0.5
            break;
        }
        echo "O resultado da operação é $r."
    ?>
    <a href="aula10.html"> Voltar</a>
</body>
</html>
