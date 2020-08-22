<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/stilo.css">
    <title></title>
</head>
<body>
    <?php
        $nome = isset($_GET["nome"]) ? $_GET["nome"] : "Não informado"; // is set
        $ano = isset($_GET["ano"]) ? $_GET["ano"] : "Não informado";
        $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "Não informado";
        $idade = date("Y") - $ano; // Y maiúsculo: 2020 (exemlplo) e y: 20 somente
        echo "$nome é $sexo e tem $idade anos."
    ?>
    <a href="aula08b.html"> Voltar</a>
</body>
</html>
