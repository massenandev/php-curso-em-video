<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
    <?php
        # Função printf
    // %d -> valor decimal (positivo ou negativo)
    // %u -> valor decimal sem sinal (apenas positivos)
    // %f -> valores reais
    // %s -> strings
    $prod = "leite";
    $preco = 4.5;
    printf("O %s está custando R$%.2f", $prod, $preco);

    // declação de vetores não precisa de declaração
    $x[0] = 4;
    $x[1] = 3;
    $x[2] = 8;
    print_r($x); // print_r é útil pra período de testes
    # outra forma de criar vetor:
    $v = array(3, 7, 6, 2, 1, 9);
    print_r($v);
    // var_dump($v); e var_export($v);

    # Função wordwrap:
    $txt = "Este é um exemplo de string gigante que foi gerado pelo PHP e vai mostrar o funcionamento da função wordwrap";
    $res = wordwrap($txt, 8, "<br/>", false); // -> quebra dentro do código HTML gerado
    // Quando colocamos "false", ele gera quebra por palavras, se for menos do que o valor da width
    echo($res);

    # Função strlen - string length
    $t = "Curso em vídeo";
    $tam = strlen($t);
    echo($tam);

    # Função trim -> cortar os espaços em branco
    $nome = "   José da Silva   ";
    echo(strlen($nome)); // daria 19
    $novo = trim($nome);
    echo($novo);
    echo(strlen($novo));

    # Função ltrim -> so tira o espaço do começo
    $name = "   José da Silva   ";
    echo(strlen($name));
    $new = ltrim($name);
    echo($new);
    echo(strlen($new));

    # Função rtrim -> tira espaços do final
    $nom = "   José da Silva   ";
    echo(strlen($nom));
    $n = rtrim($nom);
    echo($n);

    # Função str_word_count -> conta as palavras
    $frase = "Eu vou estudar PHP";
    $cont = str_word_count($frase, 0);
    echo "<br>$cont</br>";
    // ela também pode gerar um vetor:
    $cont = str_word_count($frase, 1);
    print_r($cont);
    // se colocar 2, tem-se um vetor, mantendo o posicionamento de cada palavra dentro da string
    $cont = str_word_count($frase, 2);
    print_r($cont);

    # Função explode -> procura os espaços e qual a string vai ser quebrada e armazenada num vetor
    $site = "Curso em Vídeo";
    $vetor = explode(" ", $site);
    print_r($vetor);

    # Função str_split -> pega cada letra e coloca num indice
    $nn = "Maria";
    $vv = str_split($nn);
    print_r($vv);

    # Função implode ou join
    $ve[0] = "Curso";
    $ve[1] = "em";
    $ve[2] = "Vídeo";
    $tt = implode("#", $vetor);
    print($tt);

    # Função chr -> que letra está no código
    $letra = chr(67);
    echo "A letra de código 67 é $letra ";

    # Função ord -> mostra o código da letra
    $cod = ord($letra);
    print("A letra $letra tem código $cod");

    ?>
</body>
</html>
