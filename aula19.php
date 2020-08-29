<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
    <div>
        <pre>
            <?php
                # Vetores em PHP
            $v = array("A", "J", "M", "X", "K");
            #print_r($v);
            var_dump($v);
            echo "O vetor tem " . count($v) . " elementos <br/>";

            # Gerenciando os últimos elementos
            // array_push($n, 7); -> coloca o valor 7 no final do vetor n
            // array_pop($n); -> eliminar o último elemento do vetor
            // esses dois acima são pra tratamento de pilha: LAST IN, FIRST OUT
            $t = array("A", "J", "M", "X", "K");
            print_r($t);
            array_pop($t);
            print_r($t);

            # Gerenciando os primeiros elementos
            // array_unshift($n, 7); -> coloca o valor 7 no início do vetor
            // array_shift($n); -> elimina o primeiro elemento do vetor
            array_unshift($t, 7);
            print_r($t);
            array_shift($t);
            print_r($t);

            # Ordenando vetores
            $vetor = array(3, 5, 8, 2);
            print_r($vetor);
            sort($vetor);
            print_r($vetor);
            // pra ordenar de forma decrescente:
            rsort($vetor); // R de reverse
            print_r($vetor);

            # Ordenação associativa
            // asort() -> A de associação, pra os valores ficarem em ordem, mas não os índices
            asort($vetor);
            print_r($vetor);

            # Ordenação associativa reversa
            // arsort($n) -> associação reversa
            arsort($vetor);
            print_r($vetor);

            # Ordenação por chaves
            // ksort($n) -> k de key - indices
            ksort($vetor);
            print_r($vetor);

            # Ordenação reversa por chaves
            // krsort($n) -> reverse
            krsort($vetor);
            print_r($vetor);


            ?>
        </pre>
    </div>
</body>
</html>
