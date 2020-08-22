<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/stilo.css">
    <title></title>
</head>
<body>
    <?php
        #  Ler o nome, ano de nascimento e sexo de uma pessoa, mostrando idade
        $valor = $_GET["v"];
        echo "O valor enviado foi $valor. ";
        $rq = sqrt($valor);
        echo "A raiz deste número é $rq.";
        echo "</br> Com duas casas decimais: " . number_format($rq, 2);
    ?>
    <a href="aula08.html"> Voltar</a>
</body>
</html>
