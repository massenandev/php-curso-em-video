<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/stilo.css">
    <title></title>
</head>
<body>
    <?php
    // funcoes aritmeticas:

    $v1 = $_GET["x"];
    $v2 = $_GET["y"];
    echo "<h2>Valores recebidos: $v1 e $v2</h2>";
    echo "O valor absoluto de $v2 é ". abs($v2);
    echo "</br>O valor de $v1<sup>$v2</sup> é ". pow($v1, $v2);
    echo "</br>O valor de $v1<sup>$v2</sup> é ". pow($v1, $v2);
    echo "</br>A raiz quadrada de $v1 é ". sqrt($v1);
    echo "</br>O valor de $v2 arredondado é ". round($v2); // ceil and floor as well
    echo "</br>A parte inteira de $v2 é ". intval($v2);
    echo "</br>O valor de $v1 em moeda é R$". number_format($v1, 2, ",", "."); // v1 formatado com 2 casas decimais e o separador e separador de milhar

    ?>
</body>
</html>
