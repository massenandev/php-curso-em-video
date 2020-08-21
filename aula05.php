<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/stilo.css">
    <title></title>
</head>
<body>
    <?php
        $n1 = 3;
        $n2 = 2;
        $s = $n1 + $n2;
        echo "A soma entre $n1 e $n2 é $s. <br/>"; // br pra quebra de linha

    /**
     * mesmos operadores aritméticos que em java, por ex
     *
     */
        $n = 3;
        $nn = 2;
        $media = ($n + $nn) / 2;
        echo "A soma vale ". ($n + $nn);
        echo "<br/> A subtração vale ". ($n - $nn);
        echo "<br/> A multiplicação vale ". ($n * $nn);
        echo "<br/> A divisão vale ". ($n / $nn);
        echo "<br/> O módulo vale ". ($n % $nn);
        echo "<br/> A média vale ". ($media);

        /**
         *  ordem de precedência : (), *, /, %, +, -
         *
         *  Para input:
         *  localhost/diretorio/arquivo.php?a=3&b=2
         */

        $n = $_GET["a"]; // para pegar o valor da path variable a
        $nn = $_GET["b"]; // para pegar o valor da path variable b
        echo "<h3>Valores recebidos: $n = a e $nn = b</h3>";
        $media = ($n + $nn) / 2;
        echo "A soma vale ". ($n + $nn);
        echo "<br/> A subtração vale ". ($n - $nn);
        echo "<br/> A multiplicação vale ". ($n * $nn);
        echo "<br/> A divisão vale ". ($n / $nn);
        echo "<br/> O módulo vale ". ($n % $nn);
        echo "<br/> A média vale ". ($media);

    ?>
</body>
</html>
