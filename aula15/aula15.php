<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
    <?php
        # Criar um procedimento que use a passagem de parâmetros por referência
        function teste($x){
        $x += 2;
        echo "<p>O valor de X é $x</p>";
    }

    $a = 3;
    teste($a);
    echo "<p>O valor de A é $a.</p>";
   /* function teste(&$x){
   -> nesse caso, o valor de A vai ser passado como referência
   pra X. Qualquer alteração em X, alterará A
        $x += 2;
        echo "<p>O valor de X é $x</p>";
    }

    $a = 3;
    teste($a);
    echo "<p>O valor de A é $a.</p>"; */
    ?>
</body>
</html>
