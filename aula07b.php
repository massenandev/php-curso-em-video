<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/stilo.css">
    <title></title>
</head>
<body>
    <?php
        /* Operadores lógicos:
        && - e / || - ou / xor - ou exclusivo
        */
        # Mostrar se um eleitor é obrigado ou não a votar
        $ano = $_GET["a"];
        $idade = $_GET["i"];
        echo "Quem nasceu em $ano tem $idade anos.";
        $tipo = ($idade >= 18 && $idade < 65) ? "OBRIGATORIO" : "NÃO OBRIGATÓRIO";
        echo "Seu voto é $tipo";
    ?>
</body>
</html>
