<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/stilo.css">
    <title></title>
</head>
<body>
    <?php
        # igual e do mesmo tipo: $a === $b
        // Permitir que o usuário escolha entre somar e multiplicar numeros
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $tipo = $_GET["op"];
        echo "Os valores passados foram $n1 e $n2 <br/>";
        $r = ($tipo == "s") ? $n1+$n2 : $n1*$n2; // comparação básica
        echo "O resultado será $r.";

        # Pra uma variável ser idêntica, precisa ser igual e do mesmo tipo primitivo
        $a = 3;
        $b = "3";
        $r = ($a == $b) ? "SIM" : "NÃO"; // testa o conteudo, independente do tipo
        echo "</br>As variáveis A e B são iguais? $r.";
        $v = ($a === $b) ? "SIM" : "NÃO";
        echo "</br> As variáveis são idênticas? $v.";
    ?>
</body>
</html>
