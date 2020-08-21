<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/stilo.css">
    <title></title>
</head>
<body>
    <?php
        # Praticando o uso de variáveis referenciadas:
        $a = 3;
        $b = $a;
        $b += 5;
        echo "A variável A vale $a.";
        echo "</br>A variável B vale $b.";

        # Caso coloque o &, muda
        $a = 3;
        $b = &$a; // criando referência de B pra A
        $b += 5;
        echo "</br>A variável A vale $a.";
        echo "</br>A variável B vale $b.";
    ?>
</body>
</html>
