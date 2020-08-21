<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/stilo.css">
    <title></title>
</head>
<body>
    <?php
        $n1 = $_GET["n1"];
        $n2 = $_GET["n2"];
        $m = ($n1 + $n2) / 2;
        echo "A média entre $n1 e $n2 é $m.</br>";
        $sit = ($m<6) ? "REPROVADO" : "APROVADO";
        echo "A situação do aluno é $sit </br>";
        #OU então:
        echo "A situação do aluno é " . (($m<6) ? "REPROVADO" : "APROVADO");
    ?>
</body>
</html>
