<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
    <?php
        # Rotinas em algoritmos
    function soma($a, $b){
        $s = $a + $b;
        echo "<p>A soma vale $s</p>";
    }

    soma (3,4);
    soma(8,2);
    $x = 9;
    $y = 15;
    soma($x, $y);

    # Usando return:
    function somar($f, $g){
        $soma = $f + $g;
        return $soma;
    }

    $t = 3;
    $q = 4;
    $r = somar($t, $q);
    echo "A soma entre $t e $q é igual a $r.";

    // func_get_arg() -> pega os argumentos
    // func_num_args() -> pega o numero de arg
    # Soma com múltiplos parâmetros
    function somatorio(){
        $p = func_get_args();
        $tot = func_num_args();
        $l = 0;
        for ($i = 0; $i < $tot; $i++){
            $l = $l + $p[$i];
        }
        return $l;

    }
    echo "ola";


    ?>
</body>
</html>
