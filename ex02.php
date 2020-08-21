<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/stilo.css">
    <title></title>
</head>
<body>
    <?php
    /**
     * Mostrar qual foi o ano anterior ao ano atual
     */

        $atual = $_GET["aa"]; // ano atual
        echo "O ano atual é $atual.";
        echo "O ano anterior é ." . --$atual; // primeiro tire uma unidade do atual e exiba o valor
        echo "O próximo ano será ." . ($atual+2); # porque ele já fez o decremento
    ?>
</body>
</html>
