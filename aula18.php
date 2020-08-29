<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
    <pre> <!-- para pré formatar o texto -->
    <?php
        #Matrizes e vetores (ARRAYS) -> Os vetores, em php, são dinâmicos
    // variáveis compostas
    $n = array(3,5,8,2);
    print_r($n);

    # Criando por Range
    $c = range(5, 20, 2); //começa em 5, até 20 ,de 2 em 2
    print_r($c);

    # Utilizando o ForEach
    foreach ($c as $v){
        echo "$v ";
    }

    # Chaves personalizadas, associando indice ao valor
    $a = array(1 => "A", 3 => "B", 6 => "C", 8 => "D");
    print_r($a);
    $a = "E";
    //unset($a[1]); // desalocar o vetor somente na posição 9
    print_r($a);

    # Chaves Associativas
    $cad = array("nome" => "Ana",
                "idade" => 23,
                "peso" => 65.5);
    print_r($cad);
    foreach ($cad as $campo => $valor){
        echo "O campo $campo possui o conteúdo $valor <br/>";
    }

    # Matrizes em PHP
    $matriz = array(array(6, 4),
                    array(4, 9),
                    array(3, 2));
    $matriz[0][1] = $matriz[2][0]; // linha zero, posição 1 (no caso é o 4), vai ser linha 2 e posição 1 (que é o 3)
    print_r($matriz);

    ?>
    </pre>
</body>
</html>
