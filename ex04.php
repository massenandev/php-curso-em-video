<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/stilo.css">
    <title></title>
</head>
<body>
    <?php
        # Praticando uso de variáveis de variáveis
        $x = "abc";
        $$x = "def";
        echo "O conteúdo da variável X é $x.";
        echo "</br> A variável ABC recebeu o valor $abc";
    ?>
</body>
</html>
