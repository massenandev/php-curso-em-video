<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
    <?php
        /* Manipulando strings em PHP */
    # Função strtolower
    $n = "Gustavo";
    echo "Seu nome é " . strtolower($n);
    // ou então, podia armanezar numa var: $nome3 = strtolower($nome);

    # Função strtoupper
    $k = "Guanabara";
    echo "<br>Seu nome é </br>" . strtoupper($k);

    # Função ucfirst -> primeira letra maiuscula - upper case first
    $o = "gustavo";
    echo "<br> Seu nome é " . ucfirst($o);

    # Função ucwords -> primeira letra de cada nome em upper case
    $w = "gustavo guanabara";
    echo "<br> Seu nome é " . ucwords($w);

    # Função strrev -> reverse, deixa a palavra ao contrario
    $b = "gustavo guanabara";
    echo "<br> Seu nome ao contrário é " . strrev($b);

    # Função strpos -> encontra a posição da string
    $fr = "Estou aprendendo PHP";
    $pos = strpos($fr, "PHP"); // deve ser exatamente do jeito que tá escrito
    echo "<br>A string foi encontrada na posição $pos";

    # Função stripos
    $pos = stripos($fr, "php"); // ignore case
    echo "<br>A string foi encontrada na posição $pos";

    # Função substr_count
    $ff = "<br>Estou aprendendo PHP no curso em vídeo de PHP";
    $c = substr_count($ff, "PHP");
    print("<br>PHP encontrado $c vezes na frase");

    # Função substr -> fatiamento. recebe uma substring da string
    $si = "Curso em video";
    $sub = substr($si, 0, 5);
    $su = substr($si, 7);
    echo "<br> $sub";
    echo "<br> $su";

    # Função str_pad -> faz a string caber em um espaço
    $na = "Guanabara";
    $novo = str_pad($na, 30, " ", STR_PAD_RIGHT); //-> fazendo o nome caber em 30 caracteres
    print("Meu professor $novo é bom!");

    # Função str_repeat
    $tr = str_repeat("Php", 5); //-> repete 5x
    print("<br>O texto gerado foi $tr");
    print(str_repeat("-", 20));

    # Função str_replace -> substituição
    $math = "<br>Gosto de estudar matemática";
    $nova = str_replace("matemática", "PHP", $math);
    print($nova);

    ?>
</body>
</html>
