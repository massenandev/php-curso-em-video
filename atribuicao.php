<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/stilo.css">
    <title></title>
</head>
<body>
    <?php
        $a = 3;
        $b = &$a; #Ao colocar um &, b fica referenciada ao valor de a
        $b += 5; # O valor será 8, e a=8 tb
        echo "$a";
        echo "$b";
        # Ambos os valores serão 8



    ?>
</body>
</html>
