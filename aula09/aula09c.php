<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
    <?php
        $n1 = $_GET["n1"];
        $n2 = $_GET["n2"];
        $media = ($n1 + $n2) / 2;
        echo "A primeira nota é $n1 e a segunda nota é $n2. </br>";
    echo "A média do aluno é $media.</br>";
        if($media > 0 && $media < 5){
            echo "Situação do aluno: REPROVADO.";
        } else if($media >=5 && $media < 7){
            echo "Situação do aluno: RECUPERAÇÃO.";
        } else{
            echo "Situação do aluno: APROVADO";
        }
    ?>
    <a href="aula09c.html"> Voltar</a>
</body>
</html>
