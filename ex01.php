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
     * Aplicar 10% de desconto ao preço de um produto
     */
        $preco = $_GET["p"];
        echo "O preço do produto é R$ $preco <br>";
        $preco += $preco*0.1;
        echo "</br>O preço do produto com aumento de 10% é R$ " . number_format($preco, 2); // preço formatado com 2 casas decimais
        $preco -= $preco*0.1;
        echo "</br>O preço do produto com desconto de 10% é R$ " . number_format($preco, 2);
    ?>
</body>
</html>
