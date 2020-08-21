<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/stilo.css">
    <title></title>
</head>
<body>
    <?php
        #Variáveis de variáveis
        $site = "cursoemvideo";
        $$site = "cursoPHP"; // variável variante
        /* no caso acima, foi criada uma variável
        $cursoemvideo e seu valor é "cursoPHP" */
        echo "$site";
        echo "</br>$cursoemvideo";
    ?>
</body>
</html>
